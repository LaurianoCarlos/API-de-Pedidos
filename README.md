# API de E-commerce

Esta é uma API de exemplo que demonstra como criar uma API de e-commerce usando o framework Laravel.

## Requisitos

- PHP 7.4 ou superior
- Composer
- Banco de dados MySQL

## Instalação

1. Clone o repositório para sua máquina local:

git clone https://github.com/seu-usuario/api-ecommerce.git

2. Instale as dependências do Composer:

cd api-ecommerce
composer install

3. Crie um arquivo `.env` a partir do arquivo `.env.example` e atualize as configurações do banco de dados

   
4. Execute as migrações do banco de dados:

php artisan migrate

5. Inicie o servidor de desenvolvimento:

php artisan serve

6. Acesse a API em seu navegador em `http://localhost:8000/api`.

## Alguns Endpoints

A API possui os seguintes endpoints:

- GET `/api/products`: Retorna todos os produtos cadastrados.
- GET `/api/products/{id}`: Retorna um produto específico pelo ID.
- POST `/api/products`: Cria um novo produto.
- PUT `/api/products/{id}`: Atualiza um produto existente pelo ID.
- DELETE `/api/products/{id}`: Exclui um produto existente pelo ID.

## Contribuindo

Se você quiser contribuir com este projeto, por favor envie um pull request com suas alterações.

## Licença

Este projeto é licenciado sob a Licença MIT. Consulte o arquivo LICENSE para obter mais informações.

