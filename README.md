# CRUD de Pets (PHP + JSON)

Sistema simples de cadastro e listagem de Pets e Usuários usando PHP procedural e arquivos JSON como método de persistência de dados. O menu principal navega entre as páginas e os dados são salvos em `usuarios.json` e `pets.json`.

## Sobre o CRUD

* **Operações implementadas:** Create (cadastro) e Read (listagem).
* **Campos do Pet:** `id`, `nome`, `race` (raça), `idade`.
* **Campos do Usuário:** `id`, `nome`, `email`, `senha`.
* **Persistência:** Os dados são salvos em arquivos JSON no disco, formatados com `JSON_PRETTY_PRINT` para melhor legibilidade.

---

## Estrutura (Arquivos Principais)

* `index.php`: Roteia as páginas do sistema (Ex: `?pg=cadastro`).
* `menu.php`: Contém os links de navegação.
* `cadastro.php` / `salvarUsuario.php`: Formulário e lógica para cadastro de usuários.
* `cadastroPet.php` / `salvarPet.php`: Formulário e lógica para cadastro de pets.
* `clientes.php`: Página de listagem de usuários e pets cadastrados.
* `usuarios.json` / `pets.json`: Arquivos usados como banco de dados.
* `topo.html` / `rodape.php`: Estrutura base de layout (header e footer).

---

## Como Executar

**Requisito:** PHP instalado (versão 7.4 ou superior recomendada).

### Opção A: Servidor Local (Ex: Apache/Nginx)

1.  Coloque os arquivos do projeto na pasta do seu servidor (como `htdocs` no XAMPP).
2.  Aponte o servidor para a pasta do projeto.
3.  Acesse `index.php` pelo navegador.

### Opção B: Servidor Embutido do PHP

1.  Abra seu terminal na pasta raiz do projeto.
2.  Execute o comando:
    ```bash
    php -S 127.0.0.1:8080
    ```
3.  Abra no seu navegador o endereço: `http://127.0.0.1:8000/index.php`
