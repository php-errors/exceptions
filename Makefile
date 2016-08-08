test: install
	php --version
	scripts/test

install: vendor/autoload.php

.PHONY: test install

vendor/autoload.php: composer.lock
	composer install

composer.lock: composer.json
	composer update
