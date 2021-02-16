<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'passwordsalt' => 'zm9MvTSkj351pPdSLWsM1VarS+I1jG',
  'secret' => 'R6xLEcWIZa4mJ7dKh+B4CMg5iD3+YSgumTdvJ1HErX/N4nyH',
  'trusted_domains' => 
  array (
    0 => 'nextcloud.traefik.me',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '20.0.7.1',
  'overwrite.cli.url' => 'http://nextcloud.traefik.me',
  'dbname' => 'nextcloud',
  'dbhost' => 'mariadb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'passwordDB',
  'installed' => true,
  'instanceid' => 'ocvzkqp5p0j9',
);
