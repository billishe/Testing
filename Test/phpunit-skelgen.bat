@echo off
set PHPBIN=/usr/local/php5/bin/php
"%PHPBIN%" -d safe_mode=Off "/usr/lib/php/PHPUnit/phpunit-skelgen.phar" %*