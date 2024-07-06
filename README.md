
# Upd8

Este teste tem como objetivo realizar o cadastro de cliente e cidade utilizando as seguintes tecnologias:

- [Laravel](https://laravel.com/)
- [Docker](https://www.docker.com/)
- [MySQL](https://www.mysql.com/)
## Variáveis de Ambiente

Para rodar esse projeto, você vai precisar renomar o arquivo .env.example para .env.

```
mv .env.example .env
```


## Instalação

Para fazer a instalação execute os seguintes comandos:

```bash
  make build
```

```bash
  make composer
```

```bash
  make key
```

```bash
  make migrate
```

```bash
  make seed
```
    
## Health check

Para visualizar se o serviço está rodando, acesse a seguinte url: 
- http://localhost:8000/
