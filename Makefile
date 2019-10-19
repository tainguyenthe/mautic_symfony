NAME = mautic
VERSION = 1

ssh:
	docker exec -it $(NAME)_mautic_1 /bin/bash

dev_up:
	docker-compose up -d

down:
	docker-compose down

remove:
	docker-compose rm -f

ps:
	docker-compose ps

logs:
	docker-compose logs

stop:
	docker stop $$(docker ps -a -q)

delete:
	docker rm $$(docker ps -a -q)

composer-v1:
	docker run --rm -v $$(pwd):/ composer/composer install --ignore-platform-reqs

composer-update:
	docker run --rm -v $$(pwd):/ composer/composer update --ignore-platform-reqs

composer-v2:
	rm -rf /vendor/* && docker run -e LOCAL_USER_ID=$$(id -u $(USER)) --rm -v $$(pwd)/:/var/www/html ngtrieuvi92/composer composer -vvv install --ignore-platform-reqs

dump:
	php composer.phar dump-autoload

migrate:
	docker-compose exec app php artisan migrate