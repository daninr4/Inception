all:
	@docker compose -f ./srcs/docker-compose.yml up -d --build
stop:
	@docker stop $(shell docker ps -q)
	@docker container prune -f
	@docker image prune -a -f
	@docker volume prune -f
	@docker system prune -f
