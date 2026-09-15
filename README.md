# 🛡️ Sistema de Verificação de Acesso e Log em PHP

Este projeto é uma aplicação web simples desenvolvida em **PHP** e **HTML5** que valida a idade do usuário a partir do seu ano de nascimento, concede ou nega o acesso com base na maioridade (18 anos) e registra os acessos permitidos em um arquivo de log local.

---

## 📌 Funcionalidades

- **Formulário de Entrada:** Solicita o nome e o ano de nascimento do usuário.
- **Cálculo Dinâmico:** Calcula a idade exata com base no ano atual obtido pelo servidor.
- **Validação de Maioridade:**
  - **≥ 18 anos:** Exibe mensagem de sucesso (*"Acesso permitido, [Nome]!"*) e salva os dados no arquivo de log.
  - **< 18 anos:** Exibe mensagem de restrição (*"Acesso negado, [Nome]!"*) e não gera registro de log.
- **Registro de Log (`log_acessos.txt`):** Armazena a data/hora, nome e idade dos usuários que obtiveram acesso, utilizando a flag `FILE_APPEND` para manter o histórico de registros.
- **Segurança Básica:** Trata a entrada do usuário com `htmlspecialchars` para prevenção contra vulnerabilidades como XSS.

---

## 🛠️ Tecnologias Utilizadas

- **PHP 7+ / 8+** (Processamento no backend e manipulador de arquivos)
- **HTML5** (Estrutura do formulário)
- **CSS Inline** (Estilização visual simples para mensagens de status)

---

## 🚀 Como Executar o Projeto

### Pré-requisitos

Para rodar o projeto localmente, você precisará de um ambiente de desenvolvimento PHP instalado (ex.: [XAMPP](https://www.apachefriends.org/), [WampServer](https://www.wampserver.com/), [Laragon](https://laragon.org/) ou o próprio servidor embutido do PHP).

### Passos

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)
