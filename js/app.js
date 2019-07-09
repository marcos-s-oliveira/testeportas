    
    $(document).ready(function(){

        $("#ip").mask("099.099.099.099");

    });


    function ipValue(addr){
        let part = addr.split(".");
        part.forEach(mensagem);
    }

    function mensagem(value){
        
        if (value >= 255) {
            document.getElementById("ipMsg").innerHTML = "<small><p class='muted'>Ip Inválido</p></small>";
        }else{
            document.getElementById("ipMsg").innerHTML = null;
        }
        
    }


    function testaPorta(ip,porta) {
        let url = "src/port.php?ip="+ip+"&porta="+porta;
            $.getJSON(url, function(json) {
                if(json.status == "open"){
                    status = "<b>Aberta</b>"
                }else{
                    status = "<b>Fechada/inacessível</b>"
                }
                
                if (ip) {
                    if(ip == "127.0.0.1"){
                        document.getElementById("Msg").innerHTML="<b> 403 </b> Forbiden";    
                    }else{
                        document.getElementById("Msg").innerHTML="A Porta <b>"+porta+"</b> do Servidor <b>"+ip+" </b>Está "+status;    
                    }
                    
                }
                
            
            });
        
        }

    