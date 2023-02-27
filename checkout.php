<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootStrap/bootstrap.css" />
    <link rel="stylesheet" href="./css/bootStrap/bootstrap-flatly.css" />
    <link rel="stylesheet" href="./css/">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.0.0/font/css/open-iconic-bootstrap.css"
    />
    <title>Checkout Mirror-F</title>
    <style>
      body {
        text-align: center;
        box-sizing: border-box;
        padding: 0;
        margin: 0;
      }
      .card-body {
        display: inline-block;
      }
      .card-body img {
        float: left;
        margin-bottom: 20px;
      }
      .card-body dl {
        text-align: center;
        width: 50%;
        font-size: 1.3em;
        margin: 15px auto;
        padding: 10px;
      }
    </style>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarToggleExternalContent"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.html">Mirror Fashion</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="sobre.html">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ajuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Perguntas frequentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Entre em contato</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Ótima Escolha</h1>
        <p class="lead">
          Obrigado por comprar na Mirror Fashion! Preencha seus dados para
          efetivar a compra.
        </p>
      </div>
    </div>
    <div class="container col-md-4">
      <div class="card mb-3">
        <div class="card-header">
          <h2>Sua Compra</h2>
        </div>
        <div class="card-body">
          <img
            src="./img/produtos/foto1-verde.png"
            alt="Fuzzy Cardigan"
            class="img-thumbnail mb-3"
          />
          <dl>
            <dt>Produto</dt>
            <dd>Fuzzy Cardigan</dd>

            <dt>Cor</dt>
            <dd>Verde</dd>

            <dt>Tamanho</dt>
            <dd>40</dd>

            <dt>Preço</dt>
            <dd id="preco">R$129,90</dd>
          </dl>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <div class="form-group">
            <label for="qtd">Quantidade:</label>
            <input
              type="number"
              id="qtd"
              min="1"
              max="15"
              value="1"
              class="form-control"
            />
          </div>
          <div class="form-group">
            <label for="total">Total:</label>
            <output id="total" class="form-control">R$ 129,90</output>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6">
          <div class="card mb-3">
            <fieldset class="col-lg-9">
              <legend>Cartão de Crédito</legend>
              <div class="form-group">
                <label for="numeroCartao">Numero do Cartão</label>
                <input 
                 data-mask="9999 9999 9999 9999 - 999"
                  type="text"
                  class="form-control"
                  id="numeroCartao"
                  name="numeroCartao"
                />
              </div>
              <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="bandeira-cartao"
                      >Bandeira</label
                    >
                  </div>
                  <select class="custom-select" id="bandeira-cartao">
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="master">MasterCard</option>
                    <option value="visa">Visa</option>
                    <option value="amex">American Express</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="valideCartao">Validade</label>
                <input
                  type="month"
                  name="valideCartao"
                  id="valideCartao"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" id="cvv" class="form-control" />
              </div>
            </fieldset>
          </div>
        </div>
        <form class="col-md-8 col-lg-6" action="" novalidate>
          <fieldset class="col-lg 4">
            <legend>Dados Pessoais</legend>
            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input
                type="text"
                class="form-control"
                id="nome"
                name="nome"
                autofocus
                required
              />
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                placeholder="email@exemplo.com"
              />
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input  
                data-mask="999-999-999-99"
                type="text"
                class="form-control"
                id="cpf"
                name="cpf"
                placeholder="000.000.000-00"
                required
              />
            </div>
          </fieldset>

          <div class="form-group custom-control custom-checkbox">
            <input
              type="checkbox"
              class="custom-control-input"
              id="newsletter"
              value="sim"
              checked
            />
            <label for="newsletter" class="custom-control-label"
              >Quero Receber Newsletter Mirror Fashion</label
            >
          </div>

          <button type="submit" class="btn btn-primary">
            <span class="oi oi-thumb-up"></span>
            Confirmar Pedido
          </button>
          <h2>Sua compra</h2>


          <dl>
            <dt>Cor</dt>
            <dd><?= $_POST['cor'] ?></dd>
            <dt>Tamanho</dt>
            <dd><?= $_POST['tamanho'] ?></dd>
          </dl>

                    <dt>Produto</dt>
          <dd><?= $_POST['nome'] ?></dd>
          <dt>Preço</dt>
      <dd>R$ <?= $_POST['preco'] ?></dd>



        </form>
      </div>
    </div>

   

    <script src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootjs/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/total.js"></script>
    <script src="./js/inputmask.js"></script>
    
    <script type="text/javascript">

      document.querySelector('input[type=email]').oninvalid = function(){
        //remove todas mensagens de erros antigas
        this.setCustomValidity(" ");

        //executa novamente a validaçao
        if(!this.validity.valid){
          this.setCustomValidity("email inválido");
          alert('confira campos abaixo')

        }
        /*  
        event.preventDefault();
          if(!this.validity.valid){
              alert('nome obrigatorio');
          }
          */

      };
  </script>
  </body>
</html>
