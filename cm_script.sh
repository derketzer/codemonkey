#!/bin/bash

DEBUG=""
ENV="dev"

PATH_LOCAL="/Users/der_ketzer/Arbeit/Freelance/Codemonkey/"
PATH_REMOTE="/home1/ketzer/symfony/codemonkey/v2/"

roption=(
	-av
	-e "ssh"
	--exclude=".DS_Store"
	--exclude=".git/"
	--exclude=".idea/"
    --exclude="app/cache/*"
    --exclude="app/logs/*"
	--exclude=".gitignore"
	--exclude="cm_script.sh"
)

if [ $1 ]; then
    if [ $1 = "clean" ]; then
        printf "\n== Cleaning cache == \n"
        rm -rf app/cache/*
        rm -rf app/logs/*

        exit 0
    fi

    if [ $1 = "test" ]; then
        printf "\n== Testing App == \n"
        phpunit -c app/

        exit 0
    fi

    if [ $1 = "db" ]; then
        printf "\n== Generating Entities == \n"
        php app/console doctrine:generate:entities Codemonkey

        printf "\n== Updating Schema == \n"
        php app/console doctrine:schema:update --force

        exit 0
    fi

    if [ $1 = "prod" ] || [ $1 = "deploy" ]; then
            ENV="prod"
            DEBUG="--no-debug"
    fi

    if [ $1 = "deploy" ]; then
        printf "\n== Updating vendors == \n"
        php composer.phar install --no-dev --optimize-autoloader
    fi

    if [ $1 = "prod" ] || [ $1 = "deploy" ]; then
        php app/console cache:clear --env=dev
    fi
fi

php app/console cache:clear --env=$ENV
php app/console assets:install --env=$ENV $DEBUG web/
php app/console assetic:dump --env=$ENV $DEBUG web/

if [ $1 ]; then
    if [ $1 = "deploy" ]; then
        printf "\n== Deploying to Production ==\n"
        rsync "${roption[@]}" $PATH_LOCAL hostgator:$PATH_REMOTE
    fi
fi