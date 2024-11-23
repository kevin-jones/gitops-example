include .env

deploy: push compile
	@echo "Ready to deploy..."
	git commit -am "Updated deployment to version ${BUILD_VERSION}"
	git push

push: build
	echo ${CR_PAT} | docker login ghcr.io -u kevin-jones --password-stdin
	docker push ghcr.io/kevin-jones/gitops-example/nginx:latest
	docker push ghcr.io/kevin-jones/gitops-example/php:latest
	docker push ghcr.io/kevin-jones/gitops-example/nginx:${BUILD_VERSION}
	docker push ghcr.io/kevin-jones/gitops-example/php:${BUILD_VERSION}

compile:
	export BUILD_VERSION=${BUILD_VERSION}; cat ../k8s/deployment.yml | envsubst > ../k8s-dist/deployment.yml

build:
	docker build -t ghcr.io/kevin-jones/gitops-example/nginx:${BUILD_VERSION} -f docker/nginx/Dockerfile .
	docker tag ghcr.io/kevin-jones/gitops-example/nginx:${BUILD_VERSION} ghcr.io/kevin-jones/gitops-example/nginx:latest
	docker build -t ghcr.io/kevin-jones/gitops-example/php:${BUILD_VERSION} -f docker/php/Dockerfile .
	docker tag ghcr.io/kevin-jones/gitops-example/php:${BUILD_VERSION} ghcr.io/kevin-jones/gitops-example/php:latest
