```markdown
# Switchcom - Proyecto Laravel

Switchcom es una aplicación desarrollada con Laravel que funciona escaneando todos los archivos Blade, componentes de Laravel y otras plantillas en busca de nombres de clase, generando los estilos correspondientes y escribiéndolos en un archivo CSS estático. Sigue los pasos a continuación para la instalación y configuración de esta aplicación.

## Requisitos Previos
- **PHP**: >=8.2
- **Composer**: >=2.2
- **Node.js**: >=20
- **Servidor Local**: XAMPP, WAMP o LAMP

## Instalación

### Paso 1: Instalación del Servidor
Asegúrate de tener un servidor local (XAMPP, WAMP o LAMP) en tu computadora y que esté configurado para PHP >= 8.2.

### Paso 2: Instalación de Composer
Verifica que tienes Composer instalado. Si no lo tienes, descárgalo desde [getcomposer.org](https://getcomposer.org).

### Paso 3: Instalación de Node.js
Instala Node.js >= 20 desde [nodejs.org](https://nodejs.org).

### Paso 4: Instalar dependencias de Composer
Desde la raíz del proyecto, ejecuta:
```bash
composer install
```

### Paso 5: Instalar dependencias de Node
Ejecuta el siguiente comando para instalar las dependencias de Node.js:
```bash
npm install
```

### Paso 6: Generar la clave de la aplicación
Genera una clave única para la aplicación:
```bash
php artisan key:generate
```

### Paso 7: Vincular el almacenamiento
Crea un enlace simbólico entre el almacenamiento y la aplicación:
```bash
php artisan storage:link
```

### Paso 8: Configuración de la Base de Datos
Edita el archivo `.env` para agregar las credenciales de tu base de datos:
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

### Paso 9: Configuración del Correo Electrónico
Completa las credenciales de correo en el archivo `.env`:
```dotenv
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=usuario@example.com
MAIL_PASSWORD=contraseña
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="Switchcom"
```

### Paso 10: Compilar los recursos
Genera archivos de producción CSS y JavaScript:
```bash
npm run build
```

### Paso 11: Limpiar la caché de la aplicación
Borra toda la caché de la aplicación:
```bash
php artisan optimize:clear
```

### Paso 12: Migraciones de la Base de Datos
Ejecuta las migraciones para crear las tablas en la base de datos:
```bash
php artisan migrate
```

### Paso 13: Poblar la Base de Datos
Llena la base de datos con datos iniciales:
```bash
php artisan db:seed
```

### Paso 14: Iniciar el servidor de desarrollo
Levanta el servidor local en el puerto 8000:
```bash
php artisan serve
```

Para iniciar en otro puerto, por ejemplo, 8001:
```bash
php artisan serve --port=8001
```

### Paso 15: Desarrollo en tiempo real
Para monitorear y compilar cambios en tiempo real, ejecuta:
```bash
npm run dev
```

## Acceso al Proyecto
Puedes acceder a la aplicación en tu navegador en [http://localhost:8000](http://localhost:8000).
```
