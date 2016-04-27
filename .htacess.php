<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /today-cambodia/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /today-cambodia/index.php [L]
</IfModule>