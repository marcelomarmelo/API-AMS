<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input name="cep" id="cep" type="text" />
    <button onclick="ConsultarCEP()">Consultar Cep</button>
<br/>
    Endereco: <input type="text" id="endereco"/>
<br/> 
    Cidade: <input type="text" id="cidade"/>
<br/>
    Estado: <input type="text" id="estado" />
    <br/>
    <script>
        function ConsultarCEP()
        {
            var cep = document.getElementById("cep")
            let url = "https://viacep.com.br/ws/"+cep.value+"/json/"
            fetch(url) 
            .then(resp=> resp.json())
            .then(dados => {
                alert(dados.logradouro)
            })         
        }
</script>    
</body>
</html>