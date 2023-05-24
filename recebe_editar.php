<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
      <link rel="stylesheet" href="css/formulario.css">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
      <link rel="stylesheet" href="css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <?php   include "includes/navbar_modal.php";     ?>  
      <h4 class="black-text">PÁGINA RECEBE EDITAR</h4>
      <?php
        include './conexao.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM cliente WHERE id='$id'";
        $query = $mysqli -> query($sql);
        while ($dados = $query-> fetch_assoc()){    
          $id   = $dados['id'];
          $nome = $dados['nome']; 
          $cpf = $dados['cpf'];
          echo '
            <section class="container">
            <h1 style="text-align: center;" id="eventos">Editar Cliente</h1><br>
            <div class="row row-cols-1 row-cols-md-12 g-4">
              <div class="col">
                <div class="card" id="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col s12">
                          <!--Formulário-->
                          <div class="container mt-5" style="background-color: rgba(0, 0, 0, 0.185);color: white;border-radius: 15px;">
                            <div class="card" style="background-color: rgba(0, 0, 0, 0.3);border: 4px solid dodgerblue;border-radius: 10px;">
                              <div class="card-header" style="text-align: center;background-color: dodgerblue;">
                                <legend><b>Editar</b></legend>
                              </div>
                              <div class="card-body" style="background-color: rgba(0, 0, 0, 0.6);color: white;border: 2px solid rgba(0, 0, 0, 0);border-radius: 3px;">
                                <form  action="alterar.php" method="post" style="text-align:center;">
                                  <fieldset> 
                                    <br>
                                    <div class="inputBox">
                                      <p for="id" style="font-size:30px">ID do Cliente </p> 
                                      <input class="black-text" type="text" name="id" value='.$id.' class="inputUser">
                                    </div>
                                    <br>
                                    <br>
                                    <div class="inputBox">
                                      <label for="nome" class="labelInput">Nome do Cliente  </label>
                                      <br>
                                      <input type="text" name="nome" value='.$nome.' class="inputUser">     
                                    </div>
                                    <div class="inputBox">
                                      <label for="cpf" class="labelInput">CPF do Cliente  </label>
                                      <br>
                                      <input type="text" name="cpf" value='.$cpf.' class="inputUser">       
                                    </div>
                                    <br>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary submit" type="submit" name="action">EDITAR
                                      <i>send</i>
                                    </button>
                                    
                                  </fieldset>
                                </form>
                                    </div> 
                              </div>
                          </div>
                          <!--Termino do Formulário-->     
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </section>
          ';
        }?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>



          ';  

        $nome = $_POST["nome_p"];
        $cpf = $_POST["cpf_p"];
        echo $id.$nome.$cpf;
        $alt = $mysqli-> query("UPDATE cliente SET id='$id' WHERE nome='$nome' , cpf='$cpf'");
      
        if($alt){
          echo "Sucesso: Atualizado corretamente!";
        }else{
          echo "Aviso: Não foi atualizado!";
        }    
      }              
    ?>  
    </body>
  </html>