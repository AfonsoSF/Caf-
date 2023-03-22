<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <!--Menu-->
    <div id="menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a id="imagem-menu" class="navbar-brand" href="index.php">
                    <img src="./imagens/café-logo.png" alt="Bootstrap" width="43" height="30">   
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a style="margin: 2px;" class="nav-link botao-menu" aria-current="page" href="produtos.php">Produtos</a>
                        <a style="margin: 2px;" class="nav-link botao-menu" href="index.php#sobre">Sobre</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--Carrossel de imagens-->
    <div id="carrossel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="produtos.php#cafeClassico">
                        <img src="imagens/banner-classico.png" class="d-block w-100 img-fluid" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produtos.php#cafeChapada">
                        <img src="imagens/banner-chapada-deminas.png" class="d-block w-100 img-fluid" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produtos.php#cafeCerrado">
                        <img src="imagens/banner-cerrado-mineiro.png" class="d-block w-100 img-fluid" alt="...">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>
    <!--Cards com os produtos do café-->
    <div class="container">
        <div class="card-group">
            <div class="card">
                <img src="imagens/CafeClassico-Moido-250g.png" class="card-img-top" alt="café clássico moido 250g">
                <div class="card-body">
                    <h5 class="card-title">Café clássico moido 250g</h5>
                    <a class="nav-link botao-produto" href="produtos.php">
                        <p>Venha conhecer todos os nossos cafés moidos</p>
                    </a>
                </div>  
            </div>
            <div class="card">
                <img src="imagens/CafeClassico-sachês-100g.png" class="card-img-top" alt="café clássico moido 250g">
                <div class="card-body">
                    <h5 class="card-title">Café clássico sachês</h5>
                    <a class="nav-link botao-produto" href="produtos.php">
                        <p>Venha conhecer todos nossos sachês</p>
                    </a>
                </div>
            </div>
            <div class="card">
                <img src="imagens/CafeClassico-Capsula-50g.png" class="card-img-top" alt="café clássico moido 250g">
                <div class="card-body">
                    <h5 class="card-title">Café clássico capsulas</h5>
                    <a class="nav-link botao-produto" href="produtos.php">
                        <p>Venha conhecer todos os sabores</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--Sobre a marca-->
    <div id="sobre" class="container">
        <div class="row">
            <div class="col-6">
                <h2>Coffee</h2>
                <p>Somos o maior produtor de café do mundo, 
                        portanto se tem alguém que merece tomar café de verdade, 
                        somos nós: os BRASILEIROS. Por isso, nascemos com o propósito de deixar no Brasil, 
                        o café 100% arábica, que sempre foi exportado. #AcabouaFarradosGringos → Não se esqueça: 
                        café é uma fruta e é doce. Então, aqui na Coffee, você vai tomar café doce, sem amargor, 
                        e que não precisa de açúcar. Então venha agora na loja mais próxima.
                </p>
                <p>
                    Estamos localizados na Rua do Café, N° 99, Bairro torrado, Fortaleza-CE 
                </p>
            </div>
            <div class="col-6 imagem-sobre">
                <img src="./imagens/café-logo.png" id="imagem-sobre" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <br>
    <!--Contato-->
    <div class="container">
        <div class="row">
            
        </div>
    </div>
    <!--Comentários-->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Nossas avaliações</h2>
                <?php
                    include_once "conexao.php";
                    try {
                        $consulta = $conectar->query("SELECT * FROM avaliacao");
                        
                        while ($a = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "$a[nome]:<p>  
                            Mensagem: $a[mensagem]</p>
                            ";
                        }
	                } catch (PDOException $e) {
		            echo $e -> getMessage();
	                }
                ?>
            </div>
            <div class="col-6">
                <h2>Envie sua avaliação</h2>
                <form action="avaliar.php" method="POST">
                    <div class="col-sm-10">
                        <label class="form-label" for="specificSizeInputName">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>
                    <div class="col-sm-12" style="margin-top: 2%;">
                        <label>Comentário</label>
                        <textarea name="mensagem" id="mensagem"></textarea>
                    </div>
                    <div class="col-auto" >
                        <input style="margin-top: 2%;" type="submit" class="btn botao-com" name="avaliar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <!--Rodape-->
    <div id="rodape">
        <p id="texto-rodape">Feito com 
        <img src="./imagens/coracao_menor.png" class="img-fluid" alt="Coração pequeno"> 
        por Afonso Henrique, Luany e Gleygueanne.</p>
    </div>
    <!--Link do java script-->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>