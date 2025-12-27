# PHP BayLang project

Create project
```
composer create-project baylang/project --no-install --no-scripts
```

Change folder
```
cd project
```


## Build docker container

Build test container
```
./build.sh test
```

Build prod container
```
./build.sh docker
```

Run container:
```
docker run -d -p 8000:80 -v ./src:/var/www/html --name app_project app/project:1.0
```


## Compile project

Enter container:
```
docker exec -it app_project bash
```

Change folder
```
cd /var/www/html
```

Install composer
```
composer install
```

Compile project
```
baylang-php make_all
```

Install Assets
```
./console.php core:install
```

Watch changes
```
baylang-php watch
```


## Stop container

If you want to stop container run:
```
docker stop app_project
docker rm app_project
```