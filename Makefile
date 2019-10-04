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