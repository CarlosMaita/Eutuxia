# Eutuxia Group - Transformamos la Web

<p align="center">
  <img src="https://via.placeholder.com/400x150/171347/FFFFFF?text=EUTUXIA+GROUP" alt="Eutuxia Group Logo" width="400">
</p>

<p align="center">
  <strong>Llevamos tu empresa al próximo nivel</strong>
</p>

## Sobre Eutuxia

**Eutuxia Group, C.A.** es una empresa enfocada en agilizar la digitalización de los procesos de otras empresas. Nos especializamos en ofrecer soluciones web modernas y eficientes que transforman la manera en que nuestros clientes operan en el mundo digital.

### Nuestra Misión

Transformamos la web proporcionando soluciones digitales innovadoras que impulsan el crecimiento y la eficiencia de las empresas, llevándolas al próximo nivel tecnológico.

## Características del Proyecto

Este es el sitio web corporativo de Eutuxia Group, desarrollado con tecnologías modernas para ofrecer una experiencia de usuario excepcional y un sistema de gestión de contenidos robusto.

### Funcionalidades Principales

- **Gestión de Servicios**: Administración completa de los servicios ofrecidos
- **Portfolio de Proyectos**: Showcase de proyectos realizados y casos de éxito
- **Catálogo de Productos**: Gestión de productos y soluciones digitales
- **Sistema CMS**: Panel de administración para gestión de contenidos
- **Blog Corporativo**: Sistema de publicación de artículos y noticias
- **Contacto**: Formularios de contacto y información de la empresa

## Tecnologías Utilizadas

<p align="center">
  <img src="https://skillicons.dev/icons?i=html,css,js,php,laravel,bootstrap,vue" alt="Tecnologías"/>
</p>

- **Backend**: PHP 7.2+ con Laravel Framework 7.x
- **Frontend**: HTML5, CSS3, JavaScript
- **UI Framework**: Bootstrap, Materialize CSS
- **JavaScript Framework**: Vue.js
- **Base de Datos**: MySQL/MariaDB
- **Herramientas de Build**: Laravel Mix, Webpack
- **Dependencias**: Composer (PHP), NPM (JavaScript)

## Instalación y Configuración

### Requisitos Previos

- PHP >= 7.2.5
- Composer
- Node.js >= 12.x
- MySQL/MariaDB
- Servidor web (Apache/Nginx)

### Pasos de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/alexlatam/Eutuxia.git
   cd Eutuxia
   ```

2. **Instalar dependencias de PHP**
   ```bash
   composer install
   ```

3. **Instalar dependencias de Node.js**
   ```bash
   npm install
   ```

4. **Configurar el entorno**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configurar la base de datos**
   - Editar el archivo `.env` con las credenciales de tu base de datos
   - Ejecutar las migraciones:
   ```bash
   php artisan migrate
   ```

6. **Compilar assets**
   ```bash
   npm run dev
   # o para producción
   npm run production
   ```

7. **Iniciar el servidor de desarrollo**
   ```bash
   php artisan serve
   ```

## Estructura del Proyecto

```
├── app/
│   ├── Cms/              # Modelos del CMS (Products, Services, Projects)
│   ├── Http/Controllers/ # Controladores de la aplicación
│   └── ...
├── resources/
│   ├── views/           # Plantillas Blade
│   │   ├── cms/         # Vistas del panel de administración
│   │   ├── home/        # Vistas del sitio público
│   │   └── ...
│   └── assets/          # Assets frontend
├── routes/
│   └── web.php          # Rutas de la aplicación
└── public/
    ├── css/             # Estilos compilados
    ├── js/              # JavaScript compilado
    └── imagen/          # Imágenes del proyecto
```

## Uso del Sistema

### Panel de Administración

Accede a `/cms` para gestionar:

- **Servicios**: Crear, editar y eliminar servicios
- **Proyectos**: Administrar portfolio de proyectos
- **Productos**: Gestionar catálogo de productos
- **Banners**: Gestionar elementos visuales
- **Secciones**: Organizar contenido por secciones

### Sitio Público

- **Inicio** (`/`): Página principal con información de la empresa
- **Nosotros** (`/nosotros`): Información sobre la empresa
- **Servicios** (`/servicios/{id}`): Detalle de servicios
- **Proyectos** (`/proyectos/{id}`): Portfolio de proyectos
- **Productos** (`/productos/{id}`): Catálogo de productos
- **Blog** (`/blog`): Artículos y noticias
- **Contacto** (`/contactanos`): Información de contacto

## Contribución

Las contribuciones son bienvenidas. Por favor:

1. Haz fork del proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## Información de la Empresa

**Eutuxia Group, C.A.**  
J-50017524-8

Especialistas en transformación digital y desarrollo web.

---

## Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

---

<p align="center">
  <em>© 2020 Eutuxia Group, C.A. - Todos los derechos reservados.</em>
</p>
