NAME = Inception

all: $(NAME)

$(NAME):
	mkdir -p /home/saray/data/code
	mkdir -p /home/saray/data/data
	docker-compose --project-directory srcs -f srcs/docker-compose.yml up --build

clean:
	docker-compose --project-directory srcs -f srcs/docker-compose.yml down
	docker volume rm srcs_database
	docker volume rm srcs_website
	sudo rm -rf /home/tmatis/data/

re:	clean all

fclean:	clean


setup:
	sudo chmod 777 /var/run/docker.sock
	echo "127.0.0.1	saray.42.fr" | sudo tee -a /etc/hosts



#NAME		=	inception


#all: prune reload

#linux:
#	@ echo "127.0.0.1 saray.42.fr" >> /etc/hosts
	
#stop:
#	@ docker-compose -f srcs/docker-compose.yml down

#clean: stop
#	@ rm -rf ~/Desktop/inception

#prune: clean
#	@ docker system prune -f

#reload: 
#	@ docker-compose -f srcs/docker-compose.yml up --build

#.PHONY: linux stop clean prune reload all
############################################################################################