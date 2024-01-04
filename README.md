
## Plantilla
 Es una parte del proyecto que usamos para presentar laravel
 En él exploramos las diferentes formas de usar las plantillas blade en laravel
 
## Docker
Para desplegar/poner en ejecución el proyecto, usamos un docker para el almacenamiento de datos
![./docker-compose.yaml](./documentacion/)

### Variables de entorno
Se aporta el fichero env.example con las variables de entorno necesarias para levantar el mysql dockerizado y poner en ejecución el proyecto

### Desplegar
*El proyecto tiene varias ramas según vamos abordando partes del proyecto
En local:
```shell
# Clona o haz un fork del proyecto
git clone 
https://github.com/Nett-formacion/ProyectoTutorias.git
```
> Orquesta con composer para actualizar/descargar librerías necesarias
```shell
cd ProyectoTutorias
composer update
```
> copia el fichero env (se pueden actualizar valores de entorno según preferenicas)
```shell
cp env.example .env
```
> Actualiza librerías de cliente y levanta el servidor de vite para la parte de cliente
```shell
npm install
npm run dev
```
> Ejecuta las migraciones
```shell
php artisan migrate:fresh 
```
> Levanta el servidor web que trae laravel para ejectuar el proyecto
```shell
php artisan serve
```
### Colores
Usamos los colores que nos marcan en esta plantilla
https://www.renderforest.com/es/blog/website-color-schemes  __Destaque delicado__

