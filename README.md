# Collect Audio Streaming

**Collect Audio Screen**
![](img/screen.png)

**Architecture to Send**
![](img/architecture-streaming.png)

Developing **Proof of Concept (PoC)** for project **MEC-ITA** using Streaming Technology.

## Requirements Front-End

Functional Requirements to Front-End

| Requitements ID  | Description  |
|---|---|
|  RF1 | Captar Áudio  |
|  RF2 | Escutar Gravação  |
|  RF3 | Enviar Áudio  |

## Requirements Back-End

Functional Requirements to Back-End

| Requitements ID  | Description  |
|---|---|
|  RF1 | A transferência deve estar criptografada  |
|  RF2 | Os dados relativos à transferência devem ser registrados (data, hora, local)  |
|  RF3 | Os dados de áudio devem ser acessíveis ao Módulo de Análise de Fluência  |

Non Functional Requirements to Back-End

| Requitements ID  | Description  |
|---|---|
|  RNF1 | A transferência não deve ultrapassar 30 s  |
|  RNF2 | Os dados de áudio não podem estar danificados  |
|  RNF3 | Os dados de áudio não podem ser alterados  |

## Technologies

Basic technologies useds in this project.

**Front-End**

* [PHP](https://www.php.net/) v7.4.26 (Programming Language)
* [Composer](https://getcomposer.org/) v2.3.10 (A Dependency Manager for PHP)

**Front-End**

* [Kafka](https://kafka.apache.org/) (Streaming)
* [Docker](https://www.docker.com/) (Container)

**Data Base (DB)**

* [MySQL](https://www.mysql.com/) v5.7.36 (DB SQL)
* [MongoDB](https://www.mongodb.com/) (DB NoSQL)

## Basic commands

### Front-End

* Create project

```shell
composer create-project --prefer-dist laravel/laravel flualfaapp --ignore-platform-req=ext-fileinfo
```

* Run flualfaapp

```
php artisan serve
```

