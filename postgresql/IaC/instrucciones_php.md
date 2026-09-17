# Instrucciones para ejecutar php

Cambiar al directorio de trabajo

```bash
cd /workspaces/tecweb/php
source entorno.sh
php -S localhost:8000
```

Fichero source.sh

```bash
chmod +x /workspaces/tecweb/php/entorno.sh
source /workspaces/tecweb/php/entorno.sh
```
Configurar php para que obtenga pg_connect:

```bash
sudo apt update
sudo apt install php8.3-cli php8.3-pgsql

/usr/bin/php -r "var_dump(function_exists('pg_connect'));"

export PATH="/usr/bin:$PATH"
hash -r
php -r "var_dump(function_exists('pg_connect'));"

```






