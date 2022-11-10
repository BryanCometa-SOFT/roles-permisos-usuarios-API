=======
# PruebaEstrenarVivienda-api

## Pasos para ejecutar el proyecto
composer install
npm install
s
## 0 -- Ejecución inicial
Tener instalado PHP 7 o superior y Componser
 
## 1 -- Crear base de datos
Crear un nuevo archivo .env y agregar el nombre pruebaestrenarvivienda en DB_DATABASE
Crear base de datos con el nombre "pruebaestrenarvivienda" en MySQL

## 2 -- Creación de tablas y registros iniciales
php artisan migrate:fresh --seed

## 3 -- Ejecutar el proyecto
php artisan key:generate
php artisan serve
