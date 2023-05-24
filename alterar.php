<html>
    <!--https://sweetalert2.github.io/#usage-->
    <head>
        <style type="text/css">
           body{ color: black}
           p{color: black;}
        </style>    
    </head>
    <body>
        <?php
             include './includes/navbar_modal.php';
            include './conexao.php';
            $id   = $_POST['id'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            echo $id   ."<br>";
            echo $nome ."<br>"; 
            $alt = $mysqli-> query("UPDATE cliente SET id='$id' , nome='$nome', cpf='$cpf' WHERE id=$id");
            if($alt){
                echo "Sucesso: Atualizado corretamente!";
            }else{
                echo "Aviso: Não foi atualizado!";
          }
 
  

