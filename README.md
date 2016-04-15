WSColiPosteLetterService Client Library
=======================================

## Introduction

This library provides a client for the SOAP
[WSColiPosteLetterService](https://www.coliposte.fr/pro/docs/docutheque/divers/socolissimo/integrationwsshipping.pdf).

Access to the WSColiPosteLetterService must be contracted with "La Poste" beforehand or
it will simply not work. Also, note that currently only the production mode is working.

Nb: The structure of this library is based on
[PHPForce Soap Client](https://github.com/phpforce/soap-client).

## Installation - using composer

Add the library to your `composer.json` :

```
{
    "repositories": [{
        "type": "git",
        "url": "http://github.com/ddtraceweb/ws-colissimo"
    },
    ...
    ],
    "require": {
        "ddtraceweb/ws-colissimo": "dev-master"
    }
}
```
Install it by running the command :

```
php composer.phar update ddtraceweb/ws-colissimo
```

## Usage

### Standalone

```
# see example in sample/index.php
```
