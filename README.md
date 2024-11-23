# GitOps Example

To test Argo CD this repo provides an example app deployment/service
for Argo to pull in and use as the source of truth for a Kubernetes
cluster.

Changes to this repo will then be sync'd automatically by Argo and
the Kubernetes cluster updated accordingly.

## Notes

With Argo CD it is best practise to work with two separate Git repos:
1. Application source code (PHP, JS etc.)
2. Kubernetes YAML Files (native, helm, kustomize files etc.)

This way, changes only affecting the k8s yaml files don't need to
touch the application source code repo, which may be configured to
trigger new builds, tests, container images etc. every time a change
is made. Instead, infrastructure-only changes can be made to the
k8s repo separately.

In this example app however, we will instead just have two directories:
1. app
2. k8s

Argo CD will be pointed at the "k8s" directory and all of our application
code will be in the "app" folder.

## app folder structure

Our example app has two folders:
1. src
2. docker

"src" holds our PHP/JS and other web application source code. This is the
main folder developers are working in on a daily basis.

"docker" holds code related to the docker images required to run the app.
Within the "docker" folder are the instructions to create each of the
containers that will run NGINX, PHP and other programs required to run
the application. These could be ran in Docker Desktop or via docker compose
and are independent of the Kubernetes cluster.

### docker images

Building the docker images must begin in the "app" as the root context in
order for the Dockerfiles which are in sub-folders to access the application
src folder.



