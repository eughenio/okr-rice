# okr-rice

## Rodar local

`docker-compose up -d`
`docker exec -it okr-rice-php-fpm composer update`
`docker exec -it okr-rice-php-fpm php artisan migrate --seed`

## Acessar
`http://localhost:8080`
`http://localhost:8080/okr`