up:
	docker compose up -d

up_build:
	docker compose up -d --build

down:
	docker compose down

php-cli:
	docker compose exec web /bin/bash

.PHONY:
	up up_build down php-cli
