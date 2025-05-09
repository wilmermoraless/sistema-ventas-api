# 🏪 Sistema de Inventario API

API RESTful desarrollada con PHP/Laravel para la gestión de inventario, ventas y compras.

## 📋 Endpoints Disponibles

### Productos 🛍️
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/productos` | Obtener todos los productos | ✅ Completado |
| GET | `/api/productos/{id}` | Obtener un producto específico | ✅ Completado |
| POST | `/api/productos` | Crear nuevo producto | ✅ Completado |
| PUT | `/api/productos/{id}` | Actualizar producto | ✅ Completado |
| DELETE | `/api/productos/{id}` | Eliminar producto | ✅ Completado |

### Proveedores 🏢
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/proveedores` | Obtener todos los proveedores | ⏳ Pendiente |
| GET | `/api/proveedores/{id}` | Obtener un proveedor específico | ⏳ Pendiente |
| POST | `/api/proveedores` | Crear nuevo proveedor | ⏳ Pendiente |
| PUT | `/api/proveedores/{id}` | Actualizar proveedor | ⏳ Pendiente |
| DELETE | `/api/proveedores/{id}` | Eliminar proveedor | ⏳ Pendiente |

### Clientes 👥
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/clientes` | Obtener todos los clientes | ⏳ Pendiente |
| GET | `/api/clientes/{id}` | Obtener un cliente específico | ⏳ Pendiente |
| POST | `/api/clientes` | Crear nuevo cliente | ⏳ Pendiente |
| PUT | `/api/clientes/{id}` | Actualizar cliente | ⏳ Pendiente |
| DELETE | `/api/clientes/{id}` | Eliminar cliente | ⏳ Pendiente |

### Ventas 💰
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/ventas` | Obtener todas las ventas | ⏳ Pendiente |
| GET | `/api/ventas/{id}` | Obtener una venta específica | ⏳ Pendiente |
| POST | `/api/ventas` | Crear nueva venta | ⏳ Pendiente |
| PUT | `/api/ventas/{id}` | Actualizar venta | ⏳ Pendiente |
| DELETE | `/api/ventas/{id}` | Eliminar venta | ⏳ Pendiente |

### Compras 🛒
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/compras` | Obtener todas las compras | ⏳ Pendiente |
| GET | `/api/compras/{id}` | Obtener una compra específica | ⏳ Pendiente |
| POST | `/api/compras` | Crear nueva compra | ⏳ Pendiente |
| PUT | `/api/compras/{id}` | Actualizar compra | ⏳ Pendiente |
| DELETE | `/api/compras/{id}` | Eliminar compra | ⏳ Pendiente |

## 🔄 Relaciones

### ProductoVenta (Pivot)
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/producto-venta` | Obtener todas las relaciones | ⏳ Pendiente |
| POST | `/api/producto-venta` | Crear nueva relación | ⏳ Pendiente |
| DELETE | `/api/producto-venta/{id}` | Eliminar relación | ⏳ Pendiente |

### CompraProducto (Pivot)
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/compra-producto` | Obtener todas las relaciones | ⏳ Pendiente |
| POST | `/api/compra-producto` | Crear nueva relación | ⏳ Pendiente |
| DELETE | `/api/compra-producto/{id}` | Eliminar relación | ⏳ Pendiente |

## 🛠️ Tecnologías Utilizadas

- PHP 8.x
- Laravel Framework
- MySQL/MariaDB
- RESTful API

## 🚀 Instalación

Sigue estos pasos para instalar y ejecutar el proyecto localmente:

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/profcswni/pos-api-laravel
   ```
   **Ingresa a la carpeta:**
   ```bash
   cd pos-api-laravel
   ```

2. **Instala las dependencias de PHP:**
   ```bash
   composer install
   ```
3. **Copia el archivo de entorno y configura tus variables:**
   ```bash
   cp .env.example .env
   # Edita el archivo .env con tus credenciales de base de datos
   ```
4. **Genera la clave de la aplicación:**
   ```bash
   php artisan key:generate
   ```
5. **Ejecuta las migraciones para crear las tablas:**
   ```bash
   php artisan migrate
   ```
6. **(Opcional) Pobla la base de datos con datos de ejemplo:**
   ```bash
   php artisan db:seed
   ```
7. **Añade el proyecto a Laravel Herd:**
   ```bash
   Abre Herd y añade el sitio para activarlo. Tambien puedes ejecutar php artisan serve
   ```

La API estará disponible en `http://localhost:8000` por defecto.

## 📝 Notas

- ✅ Endpoints Completados
- ⏳ Endpoints Pendientes

## 🔍 Pruebas

Los endpoints pueden ser probados utilizando:
- Postman
- Insomnia
- Cualquier cliente REST

## 📚 Documentación Adicional

Para más detalles sobre la implementación y uso de cada endpoint, consulte la documentación específica de cada recurso.
