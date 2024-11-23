include .env

push: build
	echo ${CR_PAT} | docker login ghcr.io -u kevin-jones --password-stdin
	docker push ghcr.io/kevin-jones/gitops-example/nginx:latest
	docker push ghcr.io/kevin-jones/gitops-example/php:latest
	docker push ghcr.io/kevin-jones/gitops-example/nginx:${BUILD_VERSION}
	docker push ghcr.io/kevin-jones/gitops-example/php:${BUILD_VERSION}

build:
	docker build -t ghcr.io/kevin-jones/gitops-example/nginx:${BUILD_VERSION} -f docker/nginx/Dockerfile .
	docker tag ghcr.io/kevin-jones/gitops-example/nginx:${BUILD_VERSION} ghcr.io/kevin-jones/gitops-example/nginx:latest
	docker build -t ghcr.io/kevin-jones/gitops-example/php:${BUILD_VERSION} -f docker/php/Dockerfile .
	docker tag ghcr.io/kevin-jones/gitops-example/php:${BUILD_VERSION} ghcr.io/kevin-jones/gitops-example/php:latest
