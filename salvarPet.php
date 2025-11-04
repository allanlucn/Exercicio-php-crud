<?php
    include_once ("topo.html");
    include_once ("menu.php");

    $arquivo_json = 'pets.json';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome']; 
        $race = $_POST['race'];
        $idade = $_POST['idade'];
    
        if (file_exists($arquivo_json) && filesize($arquivo_json) > 0){ 
            $conteudo_json = file_get_contents($arquivo_json); 
            $usuarios = json_decode($conteudo_json, true);

            if ($usuarios === null || !is_array($usuarios)){  
                $usuarios = [];
            }

        } else {
            $usuarios = [];
        }

        $novo_id = count($usuarios) + 1;
        $novo_pet = [
            'id' => $novo_id,
            'nome' => $nome, 
            'race' => $race,
            'idade' => $idade
        ];
        $usuarios[] = $novo_pet;

        $novo_conteudo_json = json_encode($usuarios, JSON_PRETTY_PRINT); 

        if (file_put_contents($arquivo_json, $novo_conteudo_json)){
            echo "Pet cadastrado com Sucesso!<br><br>";
            // A lista de clientes agora aparecerá dentro do layout
            include_once ("clientes.php"); 
        } else{
            echo "Erro ao salvar pet.";
        }
    
    } else { 
        echo "metodo de requisicao inválido.";
    }

    // Adicione o rodapé para fechar as tags HTML
    include_once ("rodape.php");
?>