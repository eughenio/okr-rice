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

`http://localhost:8080/okr/gantt`

## TO DO
1. ACL
2. Área Admin inteira
3. Cadastro de Areas
4. Cadastro de Perfil
5. Validação dos formulários
6. Melhorar o Gantt dos projetos

## USING
`https://docs.dhtmlx.com/gantt/desktop__howtostart_php_laravel.html#step5savingchanges`

`https://github.com/DHTMLX/gantt`