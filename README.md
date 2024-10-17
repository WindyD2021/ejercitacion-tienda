# Tienda de Productos de Manga, Cómic, Libros y Figuritas

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
- Gestión de cuentas de usuario.
- Carrito de compras funcional.
- Interfaz responsiva gracias a Tailwind CSS.

## Requisitos

Para compilar y ejecutar este proyecto, necesitarás:

- [PHP](https://www.php.net/) 7.4 o superior
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) y [NPM](https://www.npmjs.com/)
- [Laravel](https://laravel.com/docs)

>[!IMPORTANT]
> Asegúrate de tener todas las extensiones necesarias de PHP habilitadas, como `openssl`, `pdo`, `mbstring`, `tokenizer`, `xml`, y `ctype`.

## Instalación
1. Clona el repositorio:
 ```sh
       git clone https://github.com/tu-usuario/nombre-del-repo.git
       cd nombre-del-repo
```
2. Instala las dependencias de PHP:
 ```sh
       composer install
```
2. Instala las dependencias de Node.js:
```sh
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
       
       
>[!TIP] Para evitar problemas de permisos en sistemas Unix, puedes necesitar ajustar los permisos de la carpeta de almacenamiento:
>```sh
>chmod -R 775 storage
>```

      


      
>[!WARNING] Asegúrate de hacer una copia de seguridad de tus datos antes de realizar esta operación.



## Compilación
Para compilar los activos de tu proyecto, ejecuta:
```sh
       npm run dev
```
O, si deseas compilar para producción:
```sh
       npm run build
```

       
>[!NOTE] Puedes ver la aplicación en http://localhost:8000 si utilizas el servidor incorporado de Laravel:
>   ```bash
       php artisan serve



![Texto alternativo](https://github.com/WindyD2021/ejercitacion2/blob/main/Screenshot%202024-10-14%20at%2010-14-06%20Tienda%20Panini%20Argentina.png)
