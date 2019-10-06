# okr-rice

## Objetivo
Sistema de OKR com priorização no modelo RICE.

## Para Rodar Localmente, seguir a ordem:
`docker-compose up -d`

`docker-compose exec php-fpm composer update`

`docker-compose exec php-fpm php artisan migrate --seed`

`docker-compose run node npm install`

`docker-compose run node npm run dev`

## Para Acessar Localmente
`http://localhost:8080`

`http://localhost:8080/okr`

## TO DO
1. Área Admin inteira
2. Cadastro de Areas
3. Cadastro de Perfil
4. Validação dos formulários