# Webprint

Sistema de impressão Web.

## Funcionalidades

* API para registrar impressões (receberá usuário, impressora e quota);
* Interface web para receber e encaminhar trabalhos PDF para as impressoras.

## Instalação

### Básico

```bash
git clone git@github.com:wgnann/webprint
composer install
cp .env.example .env
php artisan key:generate
```

Configure o .env conforme a necessidade
