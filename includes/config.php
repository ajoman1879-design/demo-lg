<?php
/** Configuración general. Ajuste estos valores antes de publicar el sitio. */
define('SITE_NAME', 'GL Logística Aduanera SRL');
define('SITE_URL', 'https://tu-dominio.com'); // Sin barra final. Cambiar al publicar.
define('CONTACT_EMAIL', 'nestor.galeano@gl-logistica.com.py');
define('WHATSAPP_NUMBER', '595993374972');
define('COMPANY_ADDRESS', '[COMPLETAR dirección y ciudad]');
define('COMPANY_HOURS', '[COMPLETAR horario de atención]');
define('MAPS_EMBED_URL', 'https://www.google.com/maps?q=Asunci%C3%B3n%2C%20Paraguay&output=embed');

/*
 * Base de datos en la nube: Supabase (PostgreSQL).
 * Copiar los datos desde Supabase > Project Settings > API. La clave secret
 * NO debe incluirse en archivos JavaScript ni subirse a repositorios públicos.
 */
define('SUPABASE_URL', 'https://kvrcruhupmrduqhsgskq.supabase.co');
define('SUPABASE_SECRET_KEY', 'sb_publishable_MqO-DV67rEpINE6nIog5Bw_rSdqfrWp');
