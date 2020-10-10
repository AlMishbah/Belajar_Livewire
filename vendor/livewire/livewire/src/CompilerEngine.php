<?php

namespace Livewire;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\View\Engines\CompilerEngine as LaravelCompilerEngine;
use Illuminate\View\Engines\PhpEngine;
use Livewire\Exceptions\BypassViewHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class CompilerEngine extends LaravelCompilerEngine
{
    // Errors thrown while a view is rendering are caught by the Blade
    // compiler and wrapped in an "ErrorException". This makes Livewire errors
    // harder to read, AND causes issues like `abort(404)` not actually working.
    protected function handleViewException(Throwable $e, $obLevel)
    {
        $uses = array_flip(class_uses_recursive($e));

        if (
            // Don't wrap "abort(403)".
            $e instanceof AuthorizationException
            // Don't wrap "abort(404)".
            || $e instanceof NotFoundHttpException
            // Don't wrap "abort(500)".
            || $e instanceof HttpException
            // Don't wrap most Livewire exceptions.
            || isset($uses[BypassViewHandler::class])
        ) {
            // This is because there is no "parent::parent::".
            PhpEngine::handleViewException($e, $obLevel);

            return;
        }

        parent::handleViewException($e, $obLevel);
    }
}
