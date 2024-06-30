# Portal de Sugestão

### Descrição:
O Portal de Sugestão é uma aplicação desenvolvida para a empresa Fortbras. Este portal permite que os funcionários entrem com seu email e senha para acessar uma tela onde podem preencher um formulário. Este formulário será enviado ao comprador com os itens que o vendedor não conseguiu vender, facilitando o acompanhamento e a tomada de decisões para melhorar as vendas.

### Tecnologias Utilizadas:

Tailwind CSS: Utilizado para o design e estilização da interface do usuário, proporcionando um desenvolvimento ágil e responsivo.

Laravel: Framework PHP utilizado para o desenvolvimento do backend, garantindo uma aplicação robusta e segura.

### Funcionalidades:
Autenticação de Usuário: Login de funcionários através de email e senha.
Formulário de Sugestões: Interface simples e intuitiva para que os vendedores possam relatar itens não vendidos.
Envio de Sugestões: As informações preenchidas são enviadas diretamente para o comprador responsável.


## Instalação

1 - Clone o repositório:
```bash
git clone https://github.com/lucasmarquesfaria/portal
```
2 - Instale as dependências do Laravel:
```bash
composer install
```    
3 - Instale as dependências do Node.js:
```bash
npm install
```
4 - Configure o arquivo .env:
Copie o arquivo .env.example para .env e configure os detalhes do seu banco de dados e outras variáveis de ambiente.
5 - Gere a chave da aplicação:
```bash
php artisan key:generate
```
6 - Execute as migrações do banco de dados:
```bash
php artisan migrate
```
7 - Compile os assets do Tailwind CSS:
```bash
npm run dev
```
## Executando a Aplicação

1 - Inicie o servidor do Laravel:
```bash
php artisan serve
```
2 - Acesse a aplicação :
```bash
http://localhost:8000
```
