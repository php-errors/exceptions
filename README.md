> # No longer maintained
>
> This package is no longer maintained. See [this statement] for more info.
>
> [this statement]: https://gist.github.com/ezzatron/713a548735febe3d76f8ca831bc895c0

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

## Reporting deprecations

In some cases, such as CI builds, it is desirable to report on deprecations. To
enable this behavior, set the environment variable
`PHP_ERROR_EXCEPTION_DEPRECATIONS=1`.

## Bypassing the error handler

For testing purposes only, it is possible to bypass the error handler by setting
the environment variable `PHP_ERROR_EXCEPTIONS=0`.

<!-- References -->

[specification]: https://github.com/php-errors/specification/blob/master/exception-based-error-handler.md
