# Gestão de Funcionários

Uma aplicação Laravel para gerenciamento de funcionários, permitindo cadastro, edição, listagem e exclusão de forma prática e organizada.

---

## 🚀 Funcionalidades Principais

-   **📋 Listagem de Funcionários**: Exibe todos os funcionários em uma tabela com busca dinâmica por nome, e-mail, departamento ou cargo.
-   **➕ Cadastro**: Adiciona novos funcionários com validação de dados como CPF único e e-mail único.
-   **✏️ Edição**: Permite atualizar informações de funcionários existentes.
-   **🗑️ Exclusão**: Remove funcionários do sistema com confirmação.
-   **👁️ Detalhes**: Visualiza informações completas de um funcionário específico.

---

## 🛠️ Requisitos

-   **PHP**: ^8.2
-   **Laravel**: ^12.0
-   **Composer**: Para gerenciar dependências
-   **MySQL**: Banco de dados (ou outro compatível com Laravel)
-   **Node.js e NPM**: Para compilar assets (se necessário)

---

## 📦 Como Rodar o Projeto

Siga os passos abaixo para executar o projeto em sua máquina:

1. **Clone o Repositório**
   https://github.com/Vini0019/DesafioCoopanest

2. **Instale as Dependências**
   composer install

3. **Configure o ambiente**

    Copie o arquivo .env.example para .env

    cp .env.example .env

    Edite o .env com suas credenciais de banco de dados

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3307
    DB_DATABASE=coopanest
    DB_USERNAME=root
    DB_PASSWORD=

4. **Execute os Migrates**

    php artisan migrate

5. **Inicie o Servidor**

    php artisan serve

    Acesse o localhost:8000

## 🔧 Backend

### Conexão com o Banco de Dados

-   Configurada no arquivo `.env` usando o MySQL
-   Migration (`database/migrations`) cria a tabela `users` com campos:
    -   `id`, `name`, `email` (único), `cpf` (único)
    -   `departamento`, `cargo`, `salario`, `telefone`
    -   `endereco`, `nome_mae`, `observacoes`, `timestamps`
-   Utiliza Eloquent ORM para operações no banco

### 🚦 Rotas e Métodos HTTP

Todas as rotas estão definidas em `routes/web.php` e mapeadas para o `UserController`:

| Método | Rota                   | Nome            | Descrição                           |
| ------ | ---------------------- | --------------- | ----------------------------------- |
| GET    | `/`                    | -               | Lista funcionários (página inicial) |
| GET    | `/dados`               | `users.index`   | Lista funcionários                  |
| GET    | `/detalhes/{user}`     | `users.show`    | Exibe detalhes de um funcionário    |
| GET    | `/cadastro`            | `users.create`  | Formulário de cadastro              |
| POST   | `/dados`               | `users.store`   | Salva novo funcionário              |
| GET    | `/dados/{user}`        | `users.edit`    | Formulário de edição                |
| PUT    | `/update-user/{user}`  | `users.update`  | Atualiza dados do funcionário       |
| DELETE | `/destroy-user/{user}` | `users.destroy` | Deleta um funcionário               |

## 🔄 Métodos do Controller

Principais métodos do `UserController` e suas funcionalidades:

| Método      | Descrição                                                         |
| ----------- | ----------------------------------------------------------------- |
| `index()`   | 📋 Lista todos os usuários com sistema integrado de busca         |
| `show()`    | 👁️ Exibe detalhes completos de um usuário específico              |
| `create()`  | 📝 Renderiza o formulário de cadastro de novos usuários           |
| `store()`   | ✅ Valida (via `UserRequest`) e armazena um novo usuário no banco |
| `edit()`    | ✏️ Renderiza o formulário de edição para um usuário existente     |
| `update()`  | 🔄 Valida (via `UserRequest`) e atualiza os dados de um usuário   |
| `destroy()` | ❌ Remove permanentemente um usuário do banco de dados            |

## 🛡️ Validação (UserRequest)

### Regras de Validação Implementadas:

-   **Campos obrigatórios** para informações essenciais
-   **Formato de e-mail válido** com verificação de domínio
-   **CPF único** no sistema (não duplicado)
-   **Tipos de dados específicos** para cada campo (string, numérico, etc.)
-   **Tamanhos máximos e mínimos** para campos textuais

### Mensagens Customizadas:

Cada tipo de erro possui mensagens claras e amigáveis, como:

-   "O campo e-mail deve ser um endereço válido"
-   "CPF já cadastrado no sistema"
-   "O nome deve ter pelo menos 3 caracteres"

📌 _Todas as validações são aplicadas tanto no frontend quanto no backend_

## 🖼️ Frontend

### Tabela de Funcionários

-   Arquivo: `resources/views/users/index.blade.php`
-   Exibe dados em tabela HTML com colunas:
    -   ID, Nome, Email, Departamento, Cargo
    -   Salário, Telefone, Observações, Ações

**Funcionalidades:**

-   🔍 Busca Dinâmica: Formulário GET envia `search` ao backend
-   Ações por linha:
    -   👁️ Detalhes: Link para `users.show`
    -   ✏️ Editar: Link para `users.edit`
    -   ❌ Excluir: Formulário DELETE para `users.destroy`

### Interação com o Backend

-   Usa Blade para renderização dos dados
-   Formulários de cadastro (`users.create`) e edição (`users.edit`) usam:
    -   POST/PUT com token CSRF para segurança
-   Exclusão via formulário DELETE

## 📝 Observações Importantes

1. Certifique-se que o MySQL esteja rodando na porta configurada (padrão: 3307 no `.env`)
2. Views localizadas em `resources/views/users`
3. Controlador principal: `UserController.php`
4. Validações customizadas no `UserRequest`
