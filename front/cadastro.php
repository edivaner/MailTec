<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastro</title>
</head>
<body id="corpoCadastro">
    <header id="cabecaCadastro">
        <i class="fa fa-paper-plane-o" aria-hidden="true"> Central Mail</i>
    </header>
    <div class="container">
        <div class="formCadastro">
                <div class="titulo">Cadastro</div>
                <form  action="">
                    <div class="row">
                        <div class="col-md-5  m-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nome</span>
                                </div>
                                <input class="form-control" type="nome" id="nome" placeholder="Nome">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Sobrenome</span>
                                </div>
                                <input class="form-control" type="sobrenome" id="sobrenome" placeholder="sobrenome">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">E-mail válido</span>
                                </div>
                                <input class="form-control" type="email" id="email" placeholder="E-mail">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Senha válido</span>
                                </div>
                                <input class="form-control" type="senha" id="senha" placeholder="Senha">
                            </div>
                        </div>

                        <div class="col-md-5 m-2">
                            <div class="form-group">
                                <label for="arquivo">Arquivo</label>
                                <input class="form-control-file" type="file" id="arquivo">
                            </div>
            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg m-3">Cadastrar</button>

                </form>

            
        </div>

    </div>

    
</body>
</html>