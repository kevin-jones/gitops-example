include .env

push:
	echo ${CR_PAT} | docker login ghcr.io -u kevin-jones --password-stdin
	docker push ghcr.io/kevin-jones/gitops-example/nginx:latest
	docker push ghcr.io/kevin-jones/gitops-example/php:latest

build:
	docker build -t ghcr.io/kevin-jones/gitops-example/nginx:latest -f docker/nginx/Dockerfile .
	docker build -t ghcr.io/kevin-jones/gitops-example/php:latest -f docker/php/Dockerfile .
