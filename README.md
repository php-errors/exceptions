# Exception-based error handling for PHP

If this package is listed as a dependency of another package, it means that the
package is designed to work with exception-based error handling as described in
the [specification], and will *not* work correctly with the "native" errors
that PHP produces by default.

## Installation

This package installs an exception-based error handler upon installation:

    composer require errors/exceptions

It is not necessary to manually install the error handler via
[`set_error_handler()`].

[`set_error_handler()`]: http://php.net/set_error_handler

## Providing an alternate error handler

To use an alternate error handler, simply install the handler and use
[Composer]'s [provide] option:

```json
{
    "provide": {
        "errors/exceptions": "1.0.0"
    }
}
```

The "provided" error handler should still implement the [specification].

[composer]: https://getcomposer.org/
[provide]: https://getcomposer.org/doc/04-schema.md#provide

<!-- References -->

[specification]: doc/specification.md
