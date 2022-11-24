<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sobre o Projeto
O projeto Consistia em fazer uma API utilizando de PHP e um Banco de dados da minha escolha.
Para o projeto eu usei laravel, Xampp/MySQLe o Postman.
**Iniciando o Projeto**
### Passo 1
Crie a tabela **polígonos** no banco MySQL e garanta que ele esteja configurado de acordo com o arquivo **.env**
```sh
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=polígonos
DB_USERNAME=root
DB_PASSWORD=
```
### Passo 2
Para instalar as dependências do projeto execute os códigos abaixo na sua pasta raiz:
```sh
1- composer install
2- php artisan migrate
3- php artisan serve
```
### Usando a API

Para cadastrar um triângulo acesse a rota http://localhost:8000/api/triangle e inserir no corpo da requisição os valores para "base" e "height" do polígono.
**Exemplo**
```sh
{
	"base": 10,
	"height": 10
}
```

Para cadastrar um retangulo acesse a rota http://localhost:8000/api/rectangle e inserir os valores no formato abaixo .
**Exemplo**
```sh
{
	"base": 10,
	"height": 10
}
```
Para obter o resultado final com a soma da área de todos os polígonos cadastrados, acesse a rota http://localhost:8000/api/result e ela retornara valor final.

### Testes Unitários
Para realizar os testes unitários do sistema, iremos utilizar o porprio metodo que o Laravel disponibiliza.
Para testar todos os metodos utilize
```sh
 vendor\bin\phpunit 
```
Para testar cada metodo individualmente utilize:
```sh
  vendor\bin\phpunit --filter test_get_area_triangle
  vendor\bin\phpunit --filter test_get_area_rectangle
```
