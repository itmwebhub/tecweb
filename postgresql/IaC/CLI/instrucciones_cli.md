# Postgresql. Instrucciones útiles CLI Azure

## Gestionar instalación de CLI Azure en Codespace:

```bash
# Comprobar si CLI Azure está instalada
az version

# Comprobar SO
cat /etc/os-release

# Instalar CLI Azure
curl -sL https://aka.ms/InstallAzureCLIDeb | sudo bash
```

## Az Login
```bash
az login
```

## Crear grupo de recursos:
```bash
az group create \
  --name postgresqltecweb \
  --location canadacentral
```
## Elimar Grupo de Recursos:
```bash
az group delete \
  --name postgresqltecweb \
  --yes
```
## Parametros de Postgresql que acepta mi instalacion:
```bash
az postgres flexible-server create -h
```
## Crear Postgresql
```bash
az postgres flexible-server create \
  --resource-group postgresqltecweb \
  --name tecweb \
  --location canadacentral \
  --version 18 \
  --tier Burstable \
  --sku-name Standard_B1ms \
  --admin-user admintecweb \
  --admin-password "TuPasswordSegura123!" \
  --public-access 0.0.0.0
```
## Detener el servidor
```bash
az postgres flexible-server stop \
  --resource-group postgresqltecweb \
  --name tecweb
```
## Arrancar el servidor
```bash
az postgres flexible-server start \
  --resource-group postgresqltecweb \
  --name tecweb
```

## Administración Azure Postgresql
```bash
# Para permitir el acceso desde cualquier servicio Azure, agrega una regla de firewall desde 0.0.0.0:
az postgres flexible-server firewall-rule create \
  --resource-group postgreqltecweb \
  --name tecweb \
  --rule-name AllowAzureServices \
  --start-ip-address 0.0.0.0 \
  --end-ip-address 0.0.0.0

# Comprobar el servidor creado
az postgres flexible-server show \
  --resource-group postgresqltecweb \
  --name tecweb

# Obtener la cadena de conexión
az postgres flexible-server show-connection-string \
  --server-name tecweb \
  --admin-user admintecweb \
  --admin-password "TuPasswordSegura123!"

```
## Cambiar la contraseña de administrador:
```bash
az postgres flexible-server update \
  --resource-group postgresqltecweb \
  --name tecweb \
  --admin-password "NuevaPasswordSegura123!"
```

## Ejecutar psql:
```bash
export PGHOST=tecweb.postgres.database.azure.com
export PGUSER=admintecweb
export PGPORT=5432
export PGDATABASE=postgres
export PGPASSWORD="{your-password}"
psql -h tecweb.postgres.database.azure.com -p 5432 -U admintecweb postgres
```