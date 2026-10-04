# Backend PHP - DAW

Ejercicios prácticos de backend en PHP del curso de DAW (Desarrollo de Aplicaciones Web).

Cada carpeta es un bloque temático con sus propios ejercicios.

## Bloques

| Bloque | Contenido |
|--------|-----------|
| [`fundamentos-php-array-funciones-bucles`](fundamentos-php-array-funciones-bucles/) | Arrays, funciones y bucles (10 ejercicios) |
| [`forms`](forms/) | Formularios HTML y tratamiento de datos en PHP (1 ejercicio) |

## Requisitos

- PHP 7 o superior.
- Un servidor local con PHP (Apache de XAMPP o LAMP).

No hace falta instalar nada más: los ejercicios son PHP puro, sin dependencias ni base de datos.

## Cómo ejecutar

Clona el repositorio dentro de la carpeta web del servidor local:

```bash
git clone https://github.com/adricodev/backend-php-daw-ejercicios-practicos.git
```

Con la carpeta dentro de `htdocs` (XAMPP) o `www` (LAMP), arranca Apache y abre cualquier `index.php` en el navegador:

```
http://localhost/backend-php-daw-ejercicios-practicos/fundamentos-php-array-funciones-bucles/ejercicio01-listaCompra/index.php
```

También puedes ejecutarlos directamente con PHP en la terminal:

```bash
php fundamentos-php-array-funciones-bucles/ejercicio01-listaCompra/index.php
```

## Estructura

```
.
├── fundamentos-php-array-funciones-bucles/
│   ├── ejercicio01-listaCompra/
│   ├── ejercicio02-verificador/
│   ├── ejercicio03-returnValues/
│   ├── ejercicio04-buscadorArray/
│   ├── ejercicio05-clasificacionNotas/
│   ├── ejercicio06-clasificacionNotas/
│   ├── ejercicio07-catalogo-zapatillas/
│   ├── ejercicio08-stockShop/
│   ├── ejercicio09-filtroPresupuesto/
│   └── ejercicio10-precioMax/
└── forms/
    └── ejercicio01-presupuestoWeb/
```

## Convenciones

- Cada ejercicio vive en su propia carpeta y se ejecuta desde su `index.php`.
- El nombre de la carpeta sigue el formato `ejercicioNN-nombreDelEjercicio`.
- Cada ejercicio incluye un `README.md` con su tipo y su particularidad.
