# Filament Multi-Tenancy Start Kit

O Filament Multi-Tenancy Start Kit é um projeto base desenvolvido para facilitar a criação de sistemas SaaS multi tenancy. Ele oferece uma estrutura pronta para gerenciamento de múltiplas empresas, usuários e funcionalidades, utilizando o poderoso framework Laravel combinado com o Filament Admin.

## Sobre o Filament

Filament é uma ferramenta de administração de dados para Laravel, que permite a criação de painéis de controle personalizados de forma rápida e eficiente. Com ele, é possível gerenciar registros, usuários, permissões e muito mais, com uma interface intuitiva e altamente customizável.

## Funcionalidades

-   [x] Multi Tenancy
-   [x] Cadastro de Empresas
-   [x] Cadastro de Usuários
-   [x] Leads e Clientes
-   [x] Gerenciamento de Solicitações de Melhorias
-   [x] Kanban de negóciações

## Vídeo youtube

https://www.youtube.com/watch?v=As_rQFivBXA

### Multi Tenancy

-   Login e Cadastro de Usuários: Sistema de autenticação para usuários com associação às suas respectivas empresas.
-   Cadastro de Empresas: Interface para registro e gerenciamento de empresas com validação integrada.
-   Validação Multi-Tenancy: Separação lógica e segura dos dados de cada empresa no banco de dados.

### Leads e Clientes

-   Cadastro e Edição: Criação e atualização de informações de leads e clientes.
-   Visualização Detalhada: Interface amigável para consulta de registros com informações completas.
-   Histórico de Operações: Registro de todas as interações realizadas para manter o histórico de atividades.
-   Importação e Exportação de Dados: Suporte para upload de arquivos em massa e exportação dos dados em formatos como CSV e Excel.

### Gerenciamento de Solicitações de Melhorias

-   Sistema para registrar, visualizar e acompanhar solicitações de melhorias enviadas por empresas e usuários.

## Tecnologias Utilizadas

-   Laravel: Framework PHP robusto para desenvolvimento backend.
-   Filament Admin: Ferramenta para administração de dados altamente customizável e eficiente.
-   Stripe: Plataforma para gerenciamento de pagamentos online e assinatura.

Este kit foi projetado para acelerar o desenvolvimento de projetos multi tenancy, garantindo escalabilidade, segurança e usabilidade, com suporte a pagamentos integrados para monetização eficiente.

## Instalação

#### Larabel new app

```bash
laravel new myapp --using=felipearnold/filament-multi-tenancy-start-kit
```

#### Composer

```bash
composer install
```

#### NPM

```bash
npm install
```

#### ENV

```bash
 cp .env.example .env
```

#### Key

```bash
php artisan key:generate
```

#### Link Storage

```bash
php artisan storage:link
```

#### Migrações

```bash
php artisan migrate
```

#### Seeders

```bash
php artisan db:seed
```

## Login

#### User

```bash
felipe@example.com
```

#### Password

```bash
password
```


## contribua com esse projeto com qualquer valor

Se puder, ajude-nos com uma doação via PIX para manter o serviço ativo, qualquer valor é bem-vindo!

Chave PIX: 
```
58.622.735/0001-37

```

