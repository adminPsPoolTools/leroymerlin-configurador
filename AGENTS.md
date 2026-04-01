# Agent: Leroy Merlin Configurador

## Objetivo
Mantener y evolucionar esta aplicacion Laravel enfocada en herramientas de calculo para piscina y el configurador `pscover`, minimizando regresiones funcionales en flujos existentes.

## Stack del proyecto
- PHP 8.2
- Laravel 11
- Jetstream + Sanctum + Livewire
- AdminLTE
- Vite + Tailwind + Alpine

## Zonas clave del repositorio
- `routes/web.php`: rutas principales de herramientas y calculadoras.
- `app/Http/Controllers`: logica de cada calculadora/modulo.
- `resources/views`: vistas Blade (incluye `configuradorpscover`).
- `public/config/lib/pscover.php`: logica legacy critica del configurador.
- `public/config/lib/*.json`: datos base usados por el configurador.

## Normas de trabajo del agente
1. No romper rutas existentes ni nombres de vistas en produccion.
2. Priorizar cambios pequenos y localizados por modulo.
3. Mantener compatibilidad con codigo legacy en `public/config/lib`.
4. Evitar refactors agresivos en `pscover.php` sin pruebas de regresion.
5. No editar `vendor/` ni `node_modules/`.
6. Respetar el estilo existente del archivo que se toque.

## Flujo recomendado para cambios
1. Ubicar modulo afectado (`routes` -> `controller` -> `view`).
2. Aplicar cambio minimo necesario.
3. Verificar sintaxis y comportamiento basico.
4. Ejecutar pruebas o checks disponibles.
5. Documentar impacto en rutas, vistas y calculos.

## Comandos utiles
```bash
composer install
npm install
php artisan key:generate
php artisan migrate
php artisan serve
npm run dev
php artisan test
npm run build
```

## Checklist antes de cerrar una tarea
- La ruta responde y la vista carga sin errores.
- No se rompen calculos existentes del modulo.
- No hay cambios accidentales en archivos no relacionados.
- Si se toca `pscover`, se valida al menos un flujo completo del configurador.

## Convenciones para nuevas funcionalidades
- Nueva herramienta: crear controlador dedicado y vista en `resources/views/<modulo>/index.blade.php`.
- Nuevas rutas: nombrarlas con patron `<modulo>.index` y `<modulo>.calculo` cuando aplique.
- Logica reutilizable: moverla a metodos privados del controlador o clases de servicio en `app/`.

