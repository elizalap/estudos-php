# 🧪 Fórum Online com Laravel

Este projeto é uma adaptação e foi desenvolvido com base em um curso da plataforma **[Especializa Ti](https://academy.especializati.com.br)**. O objetivo é criar um **fórum online** utilizando **PHP**, **Laravel** e **React**, explorando recursos avançados da framework.


## 🚀 Sobre o Projeto

Este projeto consiste na construção de um fórum completo, no qual estou revisando e aprofundando conhecimentos em:

- 📦 Criação de **Models** e **Migrations**
- 🔑 Utilização de **UUIDs**
- 🗑️ Implementação de **Soft Deletes**
- 🛠️ Funcionalidades de **CRUD**
- 🔔 Sistema de **Notificações**
- 📡 **Eventos** e **Listeners**
- 📬 Envio **assíncrono de e-mails**

Além disso, estou aproveitando este projeto para praticar o uso de **Docker** com **WSL** localmente, simulando um ambiente de desenvolvimento mais próximo do ambiente de produção.


## 🧠 Objetivo do Estudo

- Praticar arquitetura de aplicações Laravel modernas
- Integrar Docker ao fluxo de desenvolvimento no WSL
- Refatorar e organizar o código seguindo boas práticas
- Consolidar conhecimento sobre eventos, notificações e filas no Laravel


## 🐳 Como Rodar o Projeto com Docker

Para executar este projeto localmente via Docker:

### 1. Clone o repositório

```sh
git clone https://github.com/elizalap/estudos-php.git
cd estudos-php/forum-laravel
```

### 2. Copie o `.env` do Laravel

```sh
cp .env.example .env
```

### 3. Gere a chave da aplicação

```sh
docker-compose exec app php artisan key:generate
```

### 4. Suba os containers

```sh
docker-compose up -d --build
```

### 5. Acesse o projeto

Abra o navegador em:

```
http://localhost
```

> Caso esteja usando uma porta customizada no `docker-compose.yml`, substitua `localhost` pela porta correta.


## 📌 Observações

Este repositório é voltado exclusivamente para **fins educacionais e de estudo pessoal**.


## ✍️ Autora

Feito com 💻 e ☕ por **Eliza**  
🔗 [LinkedIn - Eliza Paoliello](https://www.linkedin.com/in/eliza-paoliello)

