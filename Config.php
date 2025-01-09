<?php
/*--------- Definição de funções ---------*/
function GetRoot($local) {//descobre raiz para criação de links dinamicos, retorna $root=>../pantheon
    // Iniciar a contagem
    $contagem = 0;
  
    // Índice do caractere atual
    $i = 0;
    $string = $_SERVER['REQUEST_URI'];
    if($local){
        $conjunto_caracteres = "ZenscriptGen";
    }else{
        $conjunto_caracteres = "www";
    }
    $caractere_alvo = "/";
    // Loop while
    while ($i < strlen($string) - 1) {
  
      // Verificar se o caractere atual está no conjunto de caracteres
      if (strpos($conjunto_caracteres, $string[$i]) !== false) {
  
        // Verificar se o próximo caractere é o caractere alvo
        if ($string[$i + 1] === $caractere_alvo) {
  
          // Incrementar a contagem
          $contagem++;
        }
      }
  
      // Avançar para o próximo caractere
      $i++;
    }
    $root = "";
    while($contagem>0){
        $root = $root."../";
        $contagem = $contagem-1;
    }
    if($local){$root = $root."pantheon";
    }
    return $root;}

function ConnectDB($local) {//connecta no banco de dados
    if($local){
            $host = "localhost:3306";
            $database_name = "pantheon";
            $userr = "root";
            $password = "";}
    else{
            $host = "mysql.pantheonrpg.kinghost.net:3306";
            $database_name = "pantheonrpg";   
            $userr = "pantheonrpg";
            $password = "pantheon2828";}
    try{
            $con = new PDO("mysql:host=$host;dbname=$database_name","$userr","$password");
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo '<script>console.log("conexão bem sucedida");</script>';}
            catch(PDOException $con_error) {
            echo '<script>console.log("conexão falhou: ' . $con_error->getMessage() . '");</script>';}
    return $con;}
function StartSession(){//maneira correta de iniciar sessão
    if(!isset($_SESSION)){
        session_start();
        echo '<script>console.log("iniciando sessão");</script>';
        if(isset($_SESSION['id_user'])){ echo '<script>console.log("id do usuario:'.$_SESSION['id_user'].'");</script>';}}
    else{echo '<script>console.log("sessão já iniciada");</script>';}}

/*--------- Configurações do sistema ---------*/
$local = true;
/*--------- Inicialização do sistema ---------*/
$root = GetRoot($local);
StartSession();
$con = ConnectDB($local);
?>
<!-- icones -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<!-- bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- ajax -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.js"></script>
<!-- css -->
<link rel="stylesheet" href="<?php echo $root;?>/pantheon.css">
<!-- js -->
<script type="text/javascript" src="<?php echo $root;?>/pantheon.js"></script>
<!-- icone da guia -->
<link rel="icon" type="image/x-icon" href="<?php echo $root;?>/logo.png">
<meta charset="utf-8"/>