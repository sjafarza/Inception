include ./srcs/.env
export #to load .env fully for docker

NAME = Inception

all: $(NAME)

$(NAME):
	mkdir -p /home/saray/data/website
	mkdir -p /home/saray/data/database
	docker-compose --project-directory srcs -f srcs/docker-compose.yml up --build -d

clean:
	docker-compose --project-directory srcs -f srcs/docker-compose.yml down
	docker volume rm srcs_database
	docker volume rm srcs_website
	sudo rm -rf /home/saray/data/

re:	clean all

fclean:	clean


setup:
	sudo chmod 777 /var/run/docker.sock
	echo "127.0.0.1	saray.42.fr" | sudo tee -a /etc/hosts

.PHONY:	all clean fclean re setup
