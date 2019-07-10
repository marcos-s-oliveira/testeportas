

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Teste Portas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://cdn4.iconfinder.com/data/icons/web-and-seo-icon-set/512/global-search-512.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.mask.min.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body class="bg">
    <br><br>
    
    <br><br>
    <div class="container">
    
    <div class="form-container">
    <h2 class="page-title">Teste de portas abertas</h2>

    <form id="form">

        <label class="sr-only" for="inlineFormInputGroupUsername2">Endereço Ip</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-network-wired"></i></div>
            </div>
            <input type="text" class="form-control" id="ip" placeholder="Endereço Ip" onkeyup="ipValue(this.value)" autofocus required>
        </div>
        <div class="msg" id="ipMsg"></div>

        <label class="sr-only" for="inlineFormInputGroupUsername2">Porta</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-door-open"></i></div>
            </div>
            <input type="text" class="form-control" id="porta" placeholder="Porta TCP" required>
        </div>

    </form>    
    <a href="#" onclick="if(ip.value !== 0){testaPorta(ip.value,porta.value);}else{form.submit();}"><button class="btn btn-block btn-primary" >Testar</button></a>
    <div class="msg" id="Msg"></div>
    </div>
    </div>
<div class="footer"><small>
    <p class="copyright">&copy; 2019 <a href="http://prismasolutions.com.br">Prisma Solutions</a> Versão 1.0.2 </p>
    <p class="footer-img-copyright">Background By <a href="https://pixabay.com" target="_blank">Pixabay</a></p>
    </small></div>
    </body>
</html>