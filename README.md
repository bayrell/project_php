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
./build.sh prod
```

Run container:
```
docker run -it app/project:1.0 -p 8000:80 -v ./src:/app baylang_project
```


## Compile project

Enter container:
```
docker exec -it baylang_project
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
