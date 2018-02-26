<?php
  $myJson = 'cancer.json';

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ToDoList</title>
  </head>
  <body>
    <style media="screen">
      .cancerBox{
        width:400px;
        display: flex;
      }
      .cancerBox input{
        margin-left:15px;
      }
      .container{
        margin-left:30%;
        height:100%;

      }
      .mocheBox{
        width:400px;
        height:70%;
        overflow:scroll;
      }
      .lowerbox{
        height:20%;
        width:400px;
      }
    </style>
    <div class="container">
      <div class="lowerBox">
        <fieldset>
          <h1>Ajouter une tâche</h1>
          <br>
          <br>
          <p>La tâche à effectuer</p>
          <div class="cancerBox">
            <form action="index.php" method="POST">
              <input type="text" id="tache" name="tache"> <br>
              <input type="submit" class="ajout" value="Ajouter">
              <?php
                if (isset($_POST["tache"]) && $_POST["tache"] != "") {
                  $current_data = file_get_contents('cancer.json');
                  $array_data = json_decode($current_data, true);
                  $extra = array (
                      'message' => $_POST["tache"],
                      'fait' => false
                  );
                  $array_data[] = $extra;
                  $final_data = json_encode($array_data);
                  if (file_put_contents('cancer.json', $final_data)) {
                    // echo "<br>" ."<br>" ."la tâche a bien été ajoutée";
                  }
                }
               ?>
            </form>
          </div>
        </fieldset>
        <fieldset>
          <form class="" action="index.php" method="POST">
            <div id="todo">
              <h3>A faire</h3>
                <?php
                $data = file_get_contents($myJson);
                $message = json_decode($data);
                  foreach($message as $key => $value) {
                    if ($value->fait == false) {
                      echo "<p><input type='checkbox' class='check'>" .$value->message ."</p>";
                    }
                  }
                 ?>

            </div>

            <div id="archive">
              <h3>Archives</h3>
                <?php
                // $data = file_get_contents($myJson);
                // $message = json_decode($data);
                foreach($message as $key => $value) {
                  if ($value->fait == true) {
                    echo "<p><input checked onclick='return false;' type='checkbox' class='check'>" .$value->message ."</p>";
                  }
                }

                 ?>
            </div>

          </form>

        </fieldset>
      </div>
    </div>
  </body>
  <script src="jquery-2.2.4.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="main.js"></script>
</html>
