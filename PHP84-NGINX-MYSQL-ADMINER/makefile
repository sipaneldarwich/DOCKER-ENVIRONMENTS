build:
	docker compose -f ./docker/docker-compose.yml up --build -d
container:
	docker compose -f ./docker/docker-compose.yml exec php bash
nginxcontianer:
	docker compose -f ./docker/docker-compose.yml exec nginx bash
down:
	docker compose -f ./docker/docker-compose.yml down