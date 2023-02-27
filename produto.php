<?php
    $conexao = mysqli_connect("127.0.0.1","root","","wd43_Caelum");
    $dados = mysqli_query($conexao,"SELECT * FROM produtos WHERE id = $_GET[id]");
    $produto = mysqli_fetch_array($dados);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/produto.css">
    <title><?=$produto['nome']?></title>
</head>
<body>

<?php
     $cabecalho_tit = "Produto da Mirror Fashion";
    include("cabecalho.php");
  
    ?>

  <div class="produto-back">
    <div class="container">
        <div class="produto">
            <h1><?=$produto['nome']?></h1>
            <p>Por Apenas <?= $produto['preco']?></p>
    
            <form action="checkout.php" method="GET">

            <input type="hidden" name="nome" value="<?=$produto['nome']?>">
            <input type="hidden" name="preco" value="<?=$produto['preco']?>">
            <input type="hidden" name="id"value="<?=$produto['id']?>">

                <fieldset class="cores">
                    <legend>Escolha a Cor:</legend>
        
                    <input type="radio" name="cor" id="verde" value="verde"checked>
                    <label for="verde">
                        <img src="./img/produtos/foto<?=$produto['id']?>-verde.png" alt="produto na cor verde">
                    </label>
        
                    <input type="radio" name="cor" id="rosa" value="rosa">
                    <label for="rosa">
                        <img src="./img/produtos/foto<?=$produto['id']?>-rosa.png" alt="produto na cor rosa">
        
                    </label>
        
                    <input type="radio" name="cor" id="azul" value="azul">
                    <label for="azul">
                        <img src="./img/produtos/foto<?=$produto['id']?>-azul.png" alt="produtos na cor azul">
                    </label>
        
                </fieldset>
                <fieldset class="tamanhos">
                    <legend>
                        Escolha o Tamanho
                    </legend>
                    <input type="range" min="36" max="46" value="42" name="tamanho" id="tamanho">
                    <output for="tamanho" name="valortamanho" >36</output>
                </fieldset>
                <button class="comprar">Comprar</button>
            </form>
    
        </div>
        <div class="detalhes">
            <h2>Detalhes do Produto</h2>
            <p>
              <?= $produto['descricao']?>
            </p>
            <table>
                <thead>
                    <tr>
                        <th>Característica</th>
                        <th>Detalhe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã 7845</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Algodão e poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>lavar a mão</td>
                    </tr>
                </tbody>
    
            </table>
        </div>
      </div>
  </div>
  
   

    <?php
       include("rodape.php")
    ?>
    <script src="./js/produto.js"></script>
    
</body>
</html>