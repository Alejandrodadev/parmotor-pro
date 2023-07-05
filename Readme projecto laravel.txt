Instala los requisitos previos: Asegúrate de tener instalado en tu ordenador lo siguiente:

importa el archivo SQL en tu bbdd local.

PHP: Laravel requiere PHP en tu sistema. Puedes descargar e instalar la última versión estable de PHP desde el sitio web oficial de PHP (https://www.php.net/downloads.php).
Composer: Composer es una herramienta de administración de dependencias de PHP que Laravel utiliza. Puedes descargar e instalar Composer desde su sitio web oficial (https://getcomposer.org/download/).
Servidor web: Necesitarás un servidor web local como Apache o Nginx para ejecutar tu aplicación Laravel. Si no tienes uno instalado, puedes usar el servidor de desarrollo incorporado de Laravel durante el proceso de configuración inicial.
Clona el repositorio: En la página del repositorio en GitHub, haz clic en el botón "Clone" o "Code" y copia la URL del repositorio.

Abre una terminal: Abre una terminal o línea de comandos en tu ordenador.

Navega a la carpeta de destino: Usa el comando cd para navegar a la carpeta donde deseas clonar el repositorio.

Clona el repositorio: Ejecuta el siguiente comando en la terminal para clonar el repositorio en tu máquina:

bash

git clone <URL del repositorio>
Navega a la carpeta del proyecto: Usa el comando cd para entrar en la carpeta del proyecto clonado:

bash

cd <nombre de la carpeta>
Instala las dependencias: Ejecuta el siguiente comando para instalar las dependencias del proyecto Laravel utilizando Composer:


composer install
Copia el archivo de configuración: Laravel requiere un archivo de configuración .env para funcionar. Si el proyecto no incluye un archivo .env, puedes copiar el archivo .env.example y renombrarlo:

bash
cp .env.example .env
Genera la clave de la aplicación: Ejecuta el siguiente comando para generar una clave de aplicación única:

vbnet

php artisan key:generate
Configura la base de datos: Si el proyecto utiliza una base de datos, debes configurar la conexión en el archivo .env. Abre el archivo .env en un editor de texto y busca las variables relacionadas con la base de datos (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD). Ajusta los valores de estas variables según tu entorno de desarrollo.

Ejecuta las migraciones: Si el proyecto utiliza migraciones de base de datos, puedes ejecutar el siguiente comando para migrar las tablas a la base de datos:


php artisan migrate

Inicia el servidor de desarrollo: Ejecuta el siguiente comando para iniciar el servidor de desarrollo de Laravel:

php artisan serve

Esto iniciará el servidor en http://localhost:8000 por defecto.  o localhost de XAMPP

¡Ahora deberías poder acceder a tu aplicación Laravel en tu navegador a través de la URL http://localhost:8000 y explorarla en tu entorno local!


Tiene dos roles de usuario 

client: pepelopez@gmail.com
password: 12345678 
Solo le permite acceder a ciertas vistas

&

Admin: admin@gmail.com
password: 12345678
Tiene completo acceso a la app, crud de motos, usuarios y articulos.