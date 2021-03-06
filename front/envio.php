<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Envie uma mensagem</title>
</head>
<body id="corpoEnvio">
    <header id="cabecaEnvio">
        <i class="fa fa-paper-plane-o" aria-hidden="true"> Central Mail</i>
    </header> 
    
    <div class="container">
        <div class="formEnvio p-3">
            <form action="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Seu E-mail</span>
                    </div>
                    <input class="form-control" type="email" id="emailRemetente" placeholder="seuemail@dominio.com">
                </div> 

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Sua Senha</span>
                    </div>
                    <input class="form-control" type="password" id="senha" placeholder="******">
                </div> 

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Destinatário</span>
                    </div>
                    <input class="form-control" type="para" id="para" placeholder="destinatário@dominio.com">
                </div>

                <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" class="form-control" id="mensagem"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>

            </form>
        </div>
    </div>
</body>
</html>