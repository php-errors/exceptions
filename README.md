# The `errors/exceptions` package

Adding this package as a dependency indicates that the root package is designed
to work with exception-based error handling as described in the [specification],
and will *not* work correctly with the [native] errors that PHP produces by
default:

    composer require errors/exceptions

This package installs an exception-based error handler upon installation. It is
not necessary to manually install the error handler via [`set_error_handler()`].

[`set_error_handler()`]: http://php.net/set_error_handler
[native]: https://github.com/php-errors/native

## Providing an alternate error handler

To use an alternate error handler, simply install the alternate handler and use
[Composer]'s [provide] option:

```json
{
    "provide": {
        "errors/exceptions": "0.1.0"
    }
}
```

The "provided" error handler should still implement the [specification].

[composer]: https://getcomposer.org/
[provide]: https://getcomposer.org/doc/04-schema.md#provide

## Bypassing the error handler

For testing purposes only, it is possible to bypass the error handler by setting
the environment variable `DISABLE_PHP_ERROR_EXCEPTIONS=1`.

<!-- References -->

[specification]: https://github.com/php-errors/specification/blob/master/exception-based-error-handler.md
