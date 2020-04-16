# Requisitos

* Necesitamos crear usuarios, cada usuario tendrá
    * Username: Será un string, sabemos que lo vamos a validar usando un servicio de otra empresa, pero qué empresa será está aun por definir, tenlo en cuenta en la implementación
    * Password: lo guardaremos en plano(somos asi de cutres) y no habrá validación de ningún tipo
* El usuario se guardará, de alguna forma, en algún sitio, posiblemente en una base de datos pero aun está por decidir en cual, tenlo en cuenta en la implementación
* No estamos muy seguros de si vamos a querer una API o un comando de consola, tenemos dudas, pero la implementación deber funcionar independientemente de esto, tenlo en cuenta

# Información

* Ejecutar composer install
```
docker run --rm --interactive --tty --volume $PWD:/app composer install
```

* Ejecutar los test
```
docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp  -w /usr/src/myapp php:7.2-cli vendor/bin/phpunit
```