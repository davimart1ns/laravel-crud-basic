# Laravel CRUD Basic

Projeto básico de CRUD (Create, Read, Update, Delete) desenvolvido com **Laravel 12**, incluindo operações completas de criação, leitura, edição e exclusão de usuários e/ou dados.

Este projeto é ideal para quem está começando com Laravel e quer entender como funciona a estrutura de um CRUD completo. :contentReference[oaicite:0]{index=0}

---

## 🚀 Funcionalidades

- 📄 Listagem de registros
- ➕ Criação de novos registros
- ✏️ Edição de registros existentes
- ❌ Exclusão de registros
- 💡 Mensagens de feedback (ex.: sucesso ao criar/editar/deletar)
- 🧠 Projeto simples e limpo para aprendizado

---

## 🧰 Tecnologias Utilizadas

Este projeto foi construído com as seguintes tecnologias:

- PHP
- Laravel 12
- Blade (para views)
- Tailwind CSS (opcional, dependendo do template)
- SQLite / MySQL (configurável via `.env`) :contentReference[oaicite:1]{index=1}

---

## 🔧 Pré-requisitos

Antes de começar, você precisa ter instalado:

- PHP >= 8.1
- Composer
- Node.js & NPM
- Banco de dados (SQLite, MySQL, etc.)

---

## 📦 Instalação (Ambiente de Desenvolvimento)

Siga estes passos para configurar o projeto localmente.

### 1. Pré-requisitos

- PHP >= 8.2
- Composer
- Extensão PHP para `sqlite3`

### 2. Passos

1. Clone o repositório: `[https://github.com/davimart1ns/laravel-crud-basic.git](https://github.com/davimart1ns/laravel-crud-basic.git)`

2. Instale as dependências: `npm install`
3. Configure o `.env`: `cp .env.example .env`
4. Crie o arquivo do banco: `touch database/database.sqlite`
5. Rode as migrations e seeders: `php artisan migrate`
6. Inicie o servidor: `php artisan serve`
