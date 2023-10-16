<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Testando</title>
</head>
<body>
    <div id="cargos">

    </div>
    
    <script>
        $(document).ready(function (){
            $.post("database/person.json", function(data){
                $("#cargos").html("<p>Titulo: "+ data.titulo+"</p>"
                +"<p> Episódios: " + data.quantidadeEp+ "</p>"
                +"<p> Autor: "+data.autor+"</p>");
            }, "json");
        });
    </script>
</body>
</html>