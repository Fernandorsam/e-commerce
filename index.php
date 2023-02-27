<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Mirror Fashion</title>

   
</head>
<body>

   <?php
   include("cabecalho.php");
   ?>

    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>

            <form action="">
                <input type="search" name="" id="">
                <button>Buscar</button>
            </form>
        </section>

        <section class="menu-departamentos">
            <h2>Departamentos</h2>
            <nav>
                <ul>
                    <li>
                        <a href="#">Blusas & Camisas</a>
                        <ul>.
                            <li><a href="">Manga longa</a></li>
                            <li><a href="">Manga curta</a></li>
                            <li><a href="">Regata</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas & Carteiras </a></li>
                    <li><a href="#">Acessorios</a></li>
                </ul>

            </nav>

        </section>

        <section class="banner-destaque">
            
            <figure>
                <a href="#" class="pause" ></a>
                <img src="./img/destaque-home.png" alt="Promoção:big city night">
            </figure>
        </section>

    </div>
    <div class="container paineis">
        <section class="painel novidades  ">
            <h2>Novidades</h2>
            <ol>
               <?php
               $conexao = mysqli_connect("127.0.0.1","root","","wd43_Caelum");
               $dados = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY data DESC LIMIT 0,10");
               while ($produto = mysqli_fetch_array($dados)):
    
               ?>
               <li>
                    <a href="produto.php?id=<?= $produto['id']?>">
                      <figure>
                         <img src="./img/produtos/miniatura<?=$produto['id']?>.png" alt="<?=$produto['nome']?>">
                         <figcaption><?=$produto['nome']?> por <?=$produto['preco']?></figcaption>
                      </figure>
                
                    </a>
               </li>
               <?php endwhile; ?>
            </ol>
            <button type="button">mostrar mais</button>
        </section>

        <section class=" painel mais-vendidos ">
            <h2>Mais Vendidos</h2>
           
           <ol>
               <?php
                 $conexao = mysqli_connect("127.0.0.1","root","","wd43_Caelum");
                 $dados = mysqli_query($conexao,"SELECT * FROM produtos  ORDER BY vendas");
                 while($produto = mysqli_fetch_array($dados)):
               ?>
               <li>
                    <a href="produto.php?id=<?= $produto['id']?>">
                       <figure>
                        <img src="./img/produtos/miniatura<?=$produto['id']?>.png" alt="<?=$produto['nome']?>">
                        <figcaption><?=$produto['nome']?> por <?=$produto['preco']?></figcaption>
                       </figure>
                    </a>
               </li>
               <?php endwhile;?>
           </ol>
           <button type="button">mostrar mais</button>
        
        </section>
    </div>
     <?php
       include("rodape.php");
     ?>
    <script src="./js/jquery.js"></script>
    <script src="./js/banner.js"></script>
    <script src="./js/home.js"></script>

   

   

    

   