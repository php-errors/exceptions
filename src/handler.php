<?php

set_error_handler(
    function ($severity, $message, $path, $lineNumber) {
        if (
            E_DEPRECATED === $severity ||
            E_USER_DEPRECATED === $severity ||
            0 === error_reporting()
        ) {
            return true;
        }

        throw new ErrorException($message, 0, $severity, $path, $lineNumber);
    }
);
