# InfoCasas API Consumer

## Tabla de Contenido

- [Solución](#Solución)
- [Requiremientos](#requiremientos)
- [Instalación](#instalación)
- [Uso](#uso)
- [Test Unitarios](#test-unitarios)


## Solución

La solución propuesta consiste en:

- Analizar detalladamente el sitio web de www.InfoCasas.com.uy para identificar la fuente de datos adecuada.
- Descubrir la existencia de una API GraphQL en https://graph.infocasas.com.uy/graphql que proporciona la información necesaria.
- Crear un cliente en PHP para consumir la API GraphQL y obtener la información del inmueble utilizando su ID.
- Generar un script que reciba como argumento el ID del inmueble y devuelva el precio (moneda y monto) correspondiente.

## Requiremientos

- PHP instalado en el sistema.
- Composer instalado en el sistema.
- Acceso a Internet para realizar solicitudes a la API GraphQL de www.InfoCasas.com.uy.
## Instalación


1. Clonar Repositorio:

   ```bash
   git clone https://github.com/guerrerocing/info-casas-cli-api-consumer.git
   ```

2. Acceder al directorio del proyecto:

   ```bash
   cd info-casas-cli-api-consumer
   ```

3. Instalar dependencias:

   ```bash
   composer install
   ```


## Uso



1. Ejecutar Script

   ```bash
   php index.php 190893835
   ```


## Test Unitarios

1. Ejecutar Test

   ```bash
   ./vendor/bin/phpunit src/tests/GraphQLClientTest.php
   ```