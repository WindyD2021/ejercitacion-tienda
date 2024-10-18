# Tienda de Productos de Manga, Cómic, Libros y Figuritas

>[!NOTE]
> **Este proyecto está basado en el trabajo de otra persona** y lo estoy utilizando únicamente con fines de **práctica** para mejorar mis habilidades de desarrollo.

¡Bienvenido a la Tienda de Productos! Este proyecto está desarrollado en **Laravel** y utiliza **Tailwind CSS** para el diseño front-end. Aquí puedes explorar y comprar una amplia variedad de productos relacionados con manga, cómics, libros y figuritas.


## Contenidos

- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Compilación](#compilación)
- [Uso](#uso)
- [Contribución](#contribución)
- [Licencia](#licencia)

## Características

- Navegación fácil entre productos.
- Filtrado y búsqueda de productos por categoría.
- Interfaz responsiva gracias a Tailwind CSS.

## Requisitos

Para compilar y ejecutar este proyecto, necesitarás:

- [PHP](https://www.php.net/) 7.4 o superior
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) y [NPM](https://www.npmjs.com/)
- [Laravel](https://laravel.com/docs)

## Instalación
1. Clona el repositorio:
 ```sh
       git clone https://github.com/tu-usuario/ejercitacion-tienda.git
       cd ejercitacion-tienda

```
2. Instala las dependencias:
 ```sh
     composer install
     npm install
```
3. Copia el archivo .env.example a .env y configura las variables de entorno según tus necesidades:
```sh
       cp .env.example .env
```
4. Genera la clave de la aplicación:
```sh
       php artisan key:generate
```
5. Ejecuta las migraciones de la base de datos:
```sh
       php artisan migrate
```    



## Compilación
Para compilar los activos de tu proyecto, ejecuta:
```sh
       npm run dev
```
O, si deseas compilar para producción:
```sh
       npm run build
```

       
>[!NOTE]
>Puedes ver la aplicación en http://localhost:8000 si utilizas el servidor incorporado de Laravel:
```sh
       php artisan serve
```

>[!TIP]
>A continuación se muestra una imagen para previsualizar cómo se ve la tienda web:
>![Previsualización de la tienda](https://github.com/WindyD2021/ejercitacion2/blob/main/Screenshot%202024-10-14%20at%2010-14-06%20Tienda%20Panini%20Argentina.png)

