# okr-rice

## Para Rodar Localmente, seguir a ordem:

`docker-compose up -d`

`docker exec -it okr-rice-php-fpm composer update`

`docker exec -it okr-rice-php-fpm php artisan migrate --seed`

`docker-compose run node npm install`

`docker-compose run node npm run dev`

## Para Acessar Localmente
`http://localhost:8080`

`http://localhost:8080/okr`