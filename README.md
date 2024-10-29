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

## Estructura de Archivos

```plaintext
├── 📁 Admin
    ├── 📁 app
    ├── 📁 bootstrap
    ├── 📁 config
    ├── 📁 database
    ├── 📁 plugins
    ├── 📁 public
    ├── 📁 resources
    |    ├── 📁 css
    |    ├── 📁 fonts
    |    ├── 📁 images
    |    ├── 📁 js
    |    └── 📁 views
    |        ├── 📁 auth
    |        ├── 📁 components
    |        ├── 📁 layouts
    |        ├── 📁 profile
    |        └── 📄 All other blade files.
    ├── 📁 routes
    ├── 📁 storage
    ├── 📁 test
    ├── 📄 .editorconfig
    ├── 📄 .env
    ├── 📄 .env.example
    ├── 📄 artisan
    ├── 📄 composer.json
    ├── 📄 package.json
    ├── 📄 postcss.config.js
    ├── 📄 README.md
    ├── 📄 tailwind.config.js
    └── 📄 vite.config.js
```

## Diseño

El directorio `layouts` cubre todas las configuraciones del tema. Para aplicarlas manualmente:

- **Creative**: Configura agregando `<body class="">`
- **Detached**: Configura agregando `<body class="detached detached-simple">`

## CSS

Switchcom utiliza CSS moderno para mejorar el rendimiento y diseño visual.

| Nombre de archivo              | Detalles                     |
| ------------------------------ | ---------------------------- |
| `css/style.css`                | Tailwind CSS                 |
| `css/swiper-bundle.min.css`    | Swiper CSS                   |
| `css/fancybox.css`             | Fancybox CSS                 |
| `css/accordion.min.css`        | Accordion CSS                |

## JavaScript

Switchcom usa JavaScript para interacción avanzada.

| Nombre de archivo              | Detalles                     |
| ------------------------------ | ---------------------------- |
| `js/alpine.min.js`             | Alpine.js                    |
| `js/swiper-bundle.min.js`      | Swiper JS                    |
| `js/apexcharts.js`             | ApexCharts JS                |
| `js/fancybox.umd.js`           | Fancybox JS                  |
| `js/custom.js`                 | JavaScript personalizado     |

## Créditos y Recursos

Switchcom utiliza los siguientes plugins y recursos:

- Laravel 11
- Tailwind CSS
- Alpine JS
- Vite
- Breeze
- Fancybox
- Remix Icons
- ApexCharts JS
- Unsplash (Imágenes)
- Swiper JS
- Accordion JS
- Faces UI
- Dribble

## Apoyo

Gracias por formar parte de nosotros. Si tienes alguna consulta, sugerencia o comentario, no dudes en contactarnos.

- 📧 **Correo**: javickms@gmail.com


# ACERCA DEL PROYECTO

### 1. **Descripción del Proyecto**
   - ## Objetivo
    Switchcom está diseñado para optimizar la gestión de proyectos dentro de una organización. Su objetivo principal es centralizar la planificación, el seguimiento y la administración de recursos, permitiendo a los equipos colaborar eficientemente y mantener el control de sus proyectos en tiempo real. A través de una interfaz intuitiva y herramientas de análisis detalladas, Switchcom ayuda a mejorar la productividad y facilita la toma de decisiones basadas en datos.
    
     ## Descripción del Proyecto
     Switchcom es un sistema ERP diseñado para la gestión integral de proyectos. Facilita el seguimiento de tareas, administración de recursos y análisis de desempeño, proporcionando a los equipos de trabajo una plataforma centralizada y colaborativa.
     ```

### 2. **Capturas de Pantalla**

   - ## Capturas de Pantalla
     ![Página de Inicio](ruta/a/imagen_home.png)
     ![Vista de Proyectos](ruta/a/imagen_proyectos.png)
     ```

### 3. **Guía de Uso / Funcionalidades Principales**
   - **Objetivo**: Ayudar a los usuarios a entender cómo interactuar con la aplicación y qué funcionalidades están disponibles.
     ```markdown
     ## Guía de Uso
     - **Gestión de Usuarios**: Crear, editar y eliminar usuarios con diferentes roles y permisos.
     - **Control de Proyectos**: Crear proyectos, asignar tareas y realizar un seguimiento del progreso.
     - **Reportes**: Generación de reportes personalizados en tiempo real.
     ```

### 4. **Roadmap**
   - **Objetivo**: Indicar las características o mejoras planificadas para futuras versiones.
     ```markdown
     ## Roadmap
     - [x] Implementar autenticación con Laravel Breeze.
     - [ ] Añadir soporte para múltiples idiomas.
     - [ ] Integrar notificaciones en tiempo real.
     ```

### 5. **Contribución**
   - **Objetivo**: Explicar cómo otros desarrolladores pueden contribuir al proyecto.
     ```markdown
     ## Contribución
     ¡Contribuciones son bienvenidas! Por favor, sigue estos pasos:
     1. Haz un fork del repositorio.
     2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
     3. Realiza tus cambios y haz commit (`git commit -am 'Agrega nueva funcionalidad'`).
     4. Sube tus cambios (`git push origin feature/nueva-funcionalidad`).
     5. Abre un Pull Request.
     ```

### 6. **Licencia**
   ## Licencia
     Este proyecto está bajo la Licencia MIT. Para más detalles, consulta el archivo `LICENSE`.
     ```

### 7. **Preguntas Frecuentes (FAQ)**
   - **Objetivo**: Resolver dudas comunes que puedan surgir al usar o configurar la aplicación.
   - **Ejemplo**:
     ```markdown
     ## FAQ
     - **¿Qué versiones de Laravel son compatibles?**
       - Switchcom es compatible con Laravel 9 y versiones posteriores.
     - **¿Cómo cambio la configuración de idioma?**
       - Puedes cambiar el idioma en el archivo de configuración `config/app.php`.
     ```