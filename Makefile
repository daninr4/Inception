all:
	@sudo hostsed add 127.0.0.1 dnieto-r.42.fr && echo "successfully added dnieto-r.42.fr to /etc/hosts"
	@docker compose -f ./srcs/docker-compose.yml up -d --build
stop:
	@sudo hostsed rm 127.0.0.1 dnieto-r.42.fr && echo "successfully removed dnieto-r.42.fr to /etc/hosts"
	@docker stop $(shell docker ps -q)
	@docker container prune -f
	@docker image prune -a -f
	@docker volume prune -f
	@docker system prune -f
