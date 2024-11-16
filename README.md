# Projeto de Página Web para Descobrir o Signo Zodiacal

Este projeto é uma aplicação web que permite ao usuário descobrir seu signo zodiacal com base na sua data de nascimento. O sistema possui uma interface intuitiva onde o usuário pode inserir sua data e obter, em outra página, informações detalhadas sobre seu signo. A aplicação foi construída utilizando HTML, PHP, Bootstrap e CSS.

## Estrutura do Projeto

- **index.php**: Página inicial onde o usuário insere sua data de nascimento.
- **resultado.php**: Página que exibe o signo do usuário com uma descrição das principais características do signo.
- **signos.xml**: Arquivo XML contendo os signos, datas correspondentes e descrições de cada um.
- **CSS personalizado**: Arquivo de estilo para customizar o design e aprimorar a estética do Bootstrap.
- **layouts/header.php**: Cabeçalho compartilhado para consistência visual.

## Funcionalidades

- **Formulário de Entrada**: Permite ao usuário inserir sua data de nascimento.
- **Determinação do Signo**: Um script em PHP interpreta a data e compara com os intervalos de datas de cada signo no arquivo XML.
- **Exibição de Informações**: Na página de resultado, exibe o nome do signo e uma breve descrição de suas características.
- **Estilização Responsiva**: Usando Bootstrap e CSS personalizado, a aplicação é responsiva e funciona bem em dispositivos móveis e desktops.

## Pré-requisitos

Para rodar este projeto, é necessário:

- Servidor com PHP 7.0 ou superior
- Navegador atualizado
- Editor de texto para modificar o código (opcional)

## Como Executar o Projeto

1. Clone o repositório ou baixe o código.
2. Coloque o projeto em um servidor web local (como XAMPP, WAMP ou MAMP) na pasta do servidor (`htdocs` no XAMPP, por exemplo).
3. Inicie o servidor.
4. Abra o navegador e vá para `http://localhost/projetos/assets/layouts/`.
5. Na página inicial, insira uma data de nascimento e clique em "Descobrir Signo" para ver o resultado.

## Estrutura de Código

### index.php

Contém um formulário para que o usuário insira sua data de nascimento.

### resultado.php

Arquivo PHP que processa a data inserida, identifica o signo correspondente e exibe as informações sobre o signo.

### signos.xml

Armazena os dados dos signos, incluindo data de início, fim e descrição, para que o PHP possa determinar o signo correto.

### Customização de Estilo

Bootstrap é usado para a estrutura e responsividade, e o arquivo CSS personalizado ajusta cores e elementos visuais.

## Exemplo de Uso

1. O usuário acessa a página inicial.
2. Insere sua data de nascimento e clica no botão.
3. O sistema identifica o signo e exibe o nome e a descrição do signo na página de resultado.

## Licença

Este projeto é apenas para uso acadêmico e fins de estudo.
