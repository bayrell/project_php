#!/bin/bash

VERSION=1.0
IMAGE="app/project"
TAG=`date '+%Y%m%d_%H%M%S'`

case "$1" in
    
    test)
        docker build ./ -t $IMAGE:$TAG --file Dockerfile
    ;;
    
    docker)
        export DOCKER_DEFAULT_PLATFORM=linux/amd64
        docker build ./ -t $IMAGE:$VERSION --file Dockerfile --build-arg ARCH=-amd64
    ;;

esac