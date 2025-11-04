CRUD de Pets (PHP + JSON)
Sistema simples de cadastro e listagem de Pets e Usuários usando PHP procedural e arquivos JSON como persistência. O menu navega entre páginas e os dados são salvos em usuarios.json e pets.json.

Sobre o CRUD de Pets
Operações implementadas: Create (cadastro) e Read (listagem).
Campos do Pet: id, nome, race (raça), idade.
Campos do Usuário: id, nome, email, senha.
Persistência: arquivos JSON em disco com JSON_PRETTY_PRINT.
Estrutura (arquivos principais)
index.php — Roteia as páginas via ?pg=.
menu.php — Navegação.
cadastro.php / salvarUsuario.php — Cadastro de usuários.
cadastroPet.php / salvarPet.php — Cadastro de pets.
clientes.php — Listagem de usuários e pets.
usuarios.json / pets.json — Dados persistidos.
topo.html / rodape.php — Layout base.
Como executar
Requisito: PHP instalado (7.4+ recomendado).
Opção A: Servidor local (Apache/Nginx) apontando para a pasta do projeto e acessar index.php.
Opção B (servidor embutido do PHP):
Na raiz do projeto, rode: php -S 127.0.0.1:8000
Abra no navegador: http://127.0.0.1:8000/index.php
