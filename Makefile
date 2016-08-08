install: vendor/autoload.php

.PHONY: install

vendor/autoload.php: composer.lock
	composer install

composer.lock: composer.json
	composer update
