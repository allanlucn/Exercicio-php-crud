<h1>Cadastrar novo Pet</h1>
<form action="salvarPet.php" method="POST">
  <label for="nome">Nome:</label><br />
  <input type="text" id="nome" name="nome" required /><br /><br />

  <label for="race">Raça:</label><br />
  <input type="text" id="race" name="race" required /><br /><br />

  <label for="idade">Idade:</label><br />
  <input type="number" id="idade" name="idade" required /><br /><br />

  <button type="submit">Cadastrar</button>
</form>
