setup:
	mkdir -p data/db
	#mkdir -p /home/isghioua/data/DB
	mkdir -p data/wordpress
	#mkdir -p /home/isghioua/data/WordPress


up:
	docker-compose up -d

down:
	docker-compose down

clean: down
	docker container prune --force
	docker image prune --force --all
	docker system prune --force --all
	#docker volume rm -f (docker volume ls)
	docker volume rm inception_DB inception_Wordpress
	#docker network rm -f (docker network ls)
	sudo rm -rf data/wordpress/*
	sudo rm -rf data/db/*

re: clean up
	
