<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Teste Portas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.mask.min.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body>
    <br><br>
    
    <br><br>
    <div class="container">
    
    <div class="form-container">
    <h2 class="page-title">Teste de portas abertas</h2>
    <form>
    <label for="ip">Ip</label>
    <input class="form-control" id="ip" type="text" name="ip" value="" required min="1" max="65535" onkeyup="ipValue(this.value)" autofocus><br><br>
    <div id="ipMsg"></div>
    <label for="porta">Porta</label>
    <input class="form-control" id="porta" type="text" name="porta" value="" required ><br><br>
    </form>    
    <a href="#" onclick="testaPorta(ip.value,porta.value);"><button >Testar</button></a>
    <div id="Msg"></div>
    </div>
    </div>

    </body>
</html>