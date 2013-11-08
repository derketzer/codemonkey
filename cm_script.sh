#!/bin/bash

DEBUG=""

if [ $# -eq 0 ]
then
	ENV="dev"
else
	ENV = $1
	
	if [ $1 -eq "prod" ]
	then
		DEBUG=" --no-debug"
	fi
fi

php /Users/derketzer/Sites/symfony/app/console cache:clear --env=$ENV$DEBUG
php /Users/derketzer/Sites/symfony/app/console assets:install --env=$ENV$DEBUG /Users/derketzer/Sites/symfony/web/
php /Users/derketzer/Sites/symfony/app/console assetic:dump --env=$ENV$DEBUG /Users/derketzer/Sites/symfony/web/
