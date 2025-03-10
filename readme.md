# App Help Desk 🛠️📋

[![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-777BB4?logo=php)](https://php.net/)
[![Bootstrap Version](https://img.shields.io/badge/Bootstrap-5.3.3-7952B3?logo=bootstrap)](https://getbootstrap.com/)

<div align="center">
  <img src="./src/assets/images/logo.png" alt="App Help Desk Banner" width="400">
</div>
<br>

### Sistema profissional para gerenciamento de chamados técnicos com controle de acesso e fluxo completo de atendimento.

## 🗂️ Sumário

- [Principais Funcionalidades](#principais-funcionalidades)
- [Funcionalidades Destacadas (com snippets de código)](#funcionalidades-destacadas-com-snippets-de-código)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Instalação e Uso](#instalação-e-uso)
- [Considerações de Segurança](#considerações-de-segurança)
- [Como Contribuir](#como-contribuir)
- [Licença](#licença)

## ✨ Principais Funcionalidades

- **Autenticação Segura**: Sistema de login com controle de sessão  
- **Gestão de Tickets**:
  - Abertura de chamados com categorização  
  - Visualização de tickets existentes  
  - Armazenamento em base de dados  
- **Controle de Acesso**:
  - Perfil de Administrador (acesso completo)  
  - Perfil de Usuário (acesso restrito)  
- **Design Responsivo**: Interface adaptável a diferentes dispositivos  
- **Segurança**: Proteção contra acesso não autorizado às páginas internas  

---

## ✨ Funcionalidades Destacadas (com snippets de código)

### 🔐 Autenticação Segura
```php
// validate_login.php
if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
    $_SESSION['authenticated'] = 'YES';
    header('Location: home.php');
}
```

### 📥 Criação de Tickets
```php
// create_ticket_processor.php
$text = $_SESSION['id'] . '#' . $title . '#' . $category . '#' . $description;
file_put_contents('tickets.dat', $text, FILE_APPEND);
```

### 🛡️ Controle de Acesso
```php
// access_validator.php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: index.php?login=errorSecond');
}
```

---

## 🛠️ Tecnologias Utilizadas

- **PHP 7.4+** - Lógica de backend e gerenciamento de sessões  
- **Bootstrap 5.3.3** - Framework CSS para interface responsiva  
- **HTML5** - Estrutura semântica  
- **CSS3** - Estilização personalizada  
- **Popper.js** - Manipulação de elementos UI  

---

## 📂 Estrutura do Projeto

```
app_help_desk/
│ 
├── node_modules/     
│     ├── @popperjs/
│     └── bootstrap/
│ 
├── public/             
│     └── favicons/
│  
├── src/
│    └──assets/
│        ├── css/ 
│        │    ├── global/
│        │    │     ├── fonts.css
│        │    │     ├── global.css
│        │    │     ├── reset.css
│        │    │     ├── scrollbar.css
│        │    │     └──  variables.css
│        │    ├── layouts/
│        │    │     ├── footer.css
│        │    │     └── header.css
│        │    ├── pages/
│        │    │     ├── create_ticket.css
│        │    │     ├── home.css
│        │    │     ├── login.css
│        │    │     └── view.ticket.css
│        │    │
│        │    └── style.css
│        │
│        ├── data-base/
│        │    └── ticket.dat
│        │
│        ├── images/     
│        ├── pages/      
│        │       ├── create_ticket.php
│        │       ├── home.php
│        │       └── view_tickets.php
│        │       
│        └── scripts/  
│               ├── access_validator.php
│               ├── create_ticket_processor.php
│               ├── logoff.php
│               └── validate_login.php
├── index.php  
├── package-lock.json
├── package.json
└── readme.md         
```

---

## 🚀 Instalação e Uso

1. **Pré-requisitos**:
   - Servidor web (XAMPP/WAMP/MAMP)  
   - PHP 7.4 ou superior  
   - Node.js (para gestão de dependências)  

2. **Instalação**:
   ```bash
   git clone https://github.com/DanAntunes/app-help-desk.git
   cd app-help-desk
   npm install
   ```

3. **Acesso**:
   - Acesse `http://localhost/app-help-desk`  
   - Credenciais de teste:
     - Admin: `adm@teste.com.br` / `1234`  
     - Usuário: `dan@teste.com.br` / `1234`  

---

## 🔒 Considerações de Segurança

- Sistema de sessão com timeout automático  
- Proteção contra acesso direto a arquivos internos  
- Sanitização básica de inputs  
- Armazenamento seguro de credenciais (em memória)  

> **Nota**: Este é um projeto didático. Para ambientes produtivos, recomenda-se:
> - Implementar banco de dados relacional  
> - Adicionar hash de senhas  
> - Implementar CSRF protection  

---

## 🤝 Como Contribuir

1. Faça um fork do projeto  
2. Crie sua branch: `git checkout -b feature/nova-feature`  
3. Commit suas mudanças: `git commit -m 'Adiciona nova feature'`  
4. Push para a branch: `git push origin feature/nova-feature`  
5. Abra um Pull Request  

---

## 📄 Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.

## 📞 Contato

**Danilo Antunes**  
[![Outlook](https://img.shields.io/badge/Outlook-0078D4?style=for-the-badge&logo=microsoft-outlook&logoColor=white)](mailto:danilo-258@hotmail.com)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/dan-de-jesus/)