<h2>Lista de Clientes</h2>
<?php
$clientesLista = file_get_contents('usuarios.json');
$clientes = json_decode($clientesLista, true);
$petsLista = file_get_contents('pets.json');
$pets = json_decode($petsLista, true);

echo "<hr>";
foreach ($clientes as $cliente){
    echo ("ID: " . $cliente['id'] . "<br>");
    echo ("Nome: " . $cliente['nome'] . "<br>");
    echo ("Email: " . $cliente['email'] . "<br>");
    echo ("Senha: " . $cliente['senha'] . "<br><br>");

}
echo "<hr>";
echo "<h2>Lista de Pets</h2>";
foreach ($pets as $pet){
    echo ("ID: " . $pet['id'] . "<br>");
    echo ("Nome: " . $pet['nome'] . "<br>");
    echo ("Raça: " . $pet['race'] . "<br>");
    echo ("Idade: " . $pet['idade'] . "<br><br>");

}
?>