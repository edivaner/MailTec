<?php
    header("Location: envio.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home - Loggin</title>
</head>
<body id="corpoIndex">
    <header id="cabecaIndex">
        <i class="fa fa-paper-plane-o" aria-hidden="true"> Central Mail</i>
    </header>
    <div class="container ">
        <div class="row">
            <div class="col-md-6"></div>
            <div class=" col-md-6">
                <div class="loggin">
                    <div class="iconeLoggin">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                    </div>
                    <form action="">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input class="form-control" type="email" id="email" placeholder="E-mail">
                        </div> 

                        <div class="input-group">
                            <div class="input-group-prepend mt-4">
                                <span class="input-group-text">*</span>
                             </div>
                             <input class="form-control mt-4" type="password" id="senha" placeholder="Senha">
                        </div>

                        <a href="cadastro.html" class="btn btn-outline-primary btn-lg mt-5 mr-2 col-md-5">Cadastre-se</a>
                        <button type="submit" class="btn btn-primary btn-lg mt-5 ml-5 col-md-5">Entrar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>