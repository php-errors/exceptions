<?php

call_user_func(
    function () {
        $traceProperty = new ReflectionProperty('Exception', 'trace');
        $traceProperty->setAccessible(true);

        set_error_handler(
            function ($severity, $message, $path, $lineNumber) use (
                $traceProperty
            ) {
                if (
                    E_DEPRECATED === $severity ||
                    E_USER_DEPRECATED === $severity ||
                    0 === error_reporting()
                ) {
                    return true;
                }

                $error = new ErrorException(
                    $message,
                    0,
                    $severity,
                    $path,
                    $lineNumber
                );

                $traceProperty->setValue(
                    $error,
                    array_slice($traceProperty->getValue($error), 1)
                );

                throw $error;
            }
        );
    }
);
