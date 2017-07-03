# `errors/exceptions` changelog

## Next release

- **[BC BREAK]** Renamed the `DISABLE_PHP_ERROR_EXCEPTIONS` environment variable
  to `PHP_ERROR_EXCEPTIONS`. The value must strictly equal `0` to disable the
  handler.
- **[NEW]** Added a mechanism to throw exceptions for deprecation messages via
  setting the `PHP_ERROR_EXCEPTION_DEPRECATIONS` environment variable.

## 0.1.1 (2016-12-13)

- **[FIXED]** Updated Composer configuration to reference the tagged version of
  the specification.

## 0.1.0 (2016-12-13)

- **[NEW]** Initial implementation.
