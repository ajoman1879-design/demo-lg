# GL Logística Aduanera SRL

Sitio corporativo responsive con formulario, panel administrativo y Supabase (PostgreSQL en la nube). No requiere MySQL ni XAMPP.

## Configuración de Supabase

1. Creá un proyecto gratuito en [Supabase](https://supabase.com/dashboard).
2. En **SQL Editor > New query**, pegá y ejecutá el contenido de `sql/supabase_setup.sql`.
3. En **Project Settings > API**, copiá el **Project URL** y la clave **secret**.
4. En `includes/config.php`, reemplazá `SUPABASE_URL` y `SUPABASE_SECRET_KEY`. Esta clave se usa solo en PHP: no la copies a JavaScript ni la publiques.

## Publicación sin XAMPP

El proyecto sigue usando PHP 8 para mantener la validación segura, las sesiones y el panel. Subilo a cualquier hosting PHP 8 con cURL habilitado (por ejemplo, Hostinger, DonWeb o cPanel):

1. Subí todos los archivos por el administrador de archivos o FTP, dentro de `public_html`.
2. Configurá `SITE_URL`, dirección, horario, mapa y las claves de Supabase en `includes/config.php`.
3. Creá el primer administrador desde la terminal del hosting:

   ```bash
   php admin/create_admin.php tu-correo@dominio.com "UnaContraseñaSegura" "Administrador"
   ```

4. Ingresá al panel desde `https://tu-dominio.com/admin/login.php`.

## Diseño responsive

La interfaz está preparada para PC, tablet y teléfonos. Incluye menú hamburguesa, grillas que pasan a una columna, botones táctiles, formularios de 16 px para evitar zoom automático de iPhone y un ajuste adicional para pantallas angostas de 375 px.

## Estructura

- `assets/css` — estilos responsive del sitio y panel.
- `assets/js` — interacción, validación y animaciones sin librerías pesadas.
- `includes` — configuración, cliente seguro de Supabase y utilidades.
- `admin` — login, dashboard y gestión de consultas.
- `sql/supabase_setup.sql` — estructura y reglas de seguridad para Supabase.
