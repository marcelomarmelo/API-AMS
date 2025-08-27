<?php
/*cabeçalhos do php */
header("Content-Type: application/json; charset=UTF-8");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");
/*essa variavel recebe o metodo utilizado pode ser post,get,put ou delete
*/
$metodoSolicitado = $_SERVER['REQUEST_METHOD'];
/* esse id é quando colocamos informações na url*/
$id = $_GET['id'] ?? null;
/* ?? significa que se $_GET['id'] existir e nao for nula o conteudo entra na variável id */
switch($metodoSolicitado){
    case "POST":
    $dados_recebidos = json_decode(file_get_contents("php://input"),true);
    break;
    case "GET":

        $servidor = "localhost"; 
        $usuario = "root"; 
        $senha = ""; 
        $banco = "escola"; 

        $conexao = new mysqli($servidor,$usuario,$senha,$banco);

        $sql = "Select * from Materias";

        $resultado = $conexao->query($sql);

        $usuarios = [];
        while($linha = $resultado->fetch_assoc())
        {
            $materias[] = $linha;
        }

        echo json_encode($materias);
    break;
}
?>