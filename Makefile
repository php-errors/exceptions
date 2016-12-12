test: install
	php --version
	vendor/bin/exception-based-error-handler src/handler.php

install: vendor/autoload.php

.PHONY: test install

vendor/autoload.php:
	composer install
