#Задаем подкоманды для изменения цвета
export red=`tput setaf 1`
export green=`tput setaf 2`
export yellow=`tput setaf 3`
export cyan=`tput setaf 6`
export reset=`tput sgr0`

PROJECT_NAME = php-practice-exercises-lessons-v1
APP_CONTANER_COMMAND_PREF_PHP = @docker exec -it $(PROJECT_NAME)_php
APP_CONTANER_COMMAND_PREF_NGINX = @docker exec -it $(PROJECT_NAME)_nginx
LOCAL_APP_URL_MESSAGE = @echo  "Локальное приложение ${cyan}$(PROJECT_NAME)${reset}: http://localhost:19791"
COMPOSE_DEV = docker compose -f ./docker/docker-compose.yml  --project-name $(PROJECT_NAME)

about:
	@echo "${cyan}Привет!)${reset} Это мэйкфайл для удобной работы с командами ${cyan};)${reset}  \
     \n Выполняйте нужные действия с помощью ${yellow}make имякоманды${reset}, доступные команды: \
     \n ${green}docker.start.all${reset} - запустит все контейнеры (соберет образы, если их нет) \
     \n ${green}docker.stop.all${reset} - остановит контейнеры \
     \n ${green}docker.restart.all${reset} - перезапустит контейнеры \
     \n ${green}docker.rebuild.all${reset} - пересоберет и запустит контейнеры заново \
     \n ${green}sh.php${reset} - зайдет в консоль php-контейнера \
     \n ${green}sh.nginx${reset} - зайдет в консоль nginx-контейнера \
     \n ${green}run${reset} - выполнит php-файл: make run file=lessons/lesson01-hello/index.php \
     \n ${green}debug${reset} - то же, но с включенным xdebug-отладчиком: make debug file=lessons/lesson01-hello/index.php \
	"

# DOCKER---------------------------------------
sh.php:
	$(APP_CONTANER_COMMAND_PREF_PHP) sh -l
sh.nginx:
	$(APP_CONTANER_COMMAND_PREF_NGINX) sh

docker.start.all:
	$(COMPOSE_DEV)  up -d
	$(LOCAL_APP_URL_MESSAGE)

docker.stop.all:
	$(COMPOSE_DEV)  stop

docker.rebuild.all: docker.stop.all
	$(COMPOSE_DEV)  up -d --build
	$(LOCAL_APP_URL_MESSAGE)

docker.restart.all: docker.stop.all docker.start.all

#APPLICATION--------------------------------------
run:
	$(APP_CONTANER_COMMAND_PREF_PHP) php $(file)

debug:
	@docker exec -it -e XDEBUG_SESSION=netbeans-xdebug $(PROJECT_NAME)_php php $(file)
