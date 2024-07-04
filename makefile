include .env

SHELL := /bin/bash
.DEFAULT_GOAL := help
DOCKER_COMPOSE := docker-compose
COMPOSER := composer

.PHONY: help start build stop container migrate seed composer key

help:
	@echo "Upd8 Makefile"
	@echo "---------------------"
	@echo "Usage: make <command>"
	@echo ""
	@echo "Commands:"
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  \033[36m%-26s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

start: ## Start all containers
	$(DOCKER_COMPOSE) up -d

build: ## Build all containers without detach
	$(DOCKER_COMPOSE) up --build

stop: ## Stop all containers
	$(DOCKER_COMPOSE) down -v

container: ## Enter the container
	docker exec -it php-upd8 bash

migrate: ## Enter the container and run migrate
	docker exec php-upd8 php artisan migrate

seed: ## Enter the container and run db:seed
	docker exec -it php-upd8 php artisan db:seed

composer: ## Enter the container and composer install
	docker exec -it php-upd8 composer install

key: ## Enter the container and run key generate
	docker exec -it php-upd8 php artisan key:generate
