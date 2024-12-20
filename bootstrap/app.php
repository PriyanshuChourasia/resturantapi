<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        apiPrefix: '/api/admin',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //This is a global not found exception and will return message for all not found routes
        $exceptions->render(function (NotFoundHttpException $notFoundHttpException, Request $request) {
            if ($request->is('api/admin/*')) {
                return response()->json([
                    'error' => [
                        'status' => 'Not found',
                        'message' => $notFoundHttpException->getMessage()
                    ],
                    'success' => false
                ], 404);
            }
        });
        $exceptions->render(function (ValidationException $validationException, Request $request) {
            if ($request->is('api/admin/*')) {
                return response()->json([
                    'error' => [
                        'status' => 'Error',
                        'message' => $validationException->getMessage()
                    ],
                    'success' => false
                ], 400);
            }
        });
    })->create();
