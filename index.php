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
          <form name="form1" method="POST" action="index.php">
            <textarea name="message" rows="1" cols="30">
                <?php
                  echo $_POST["message"];
                 ?>
            </textarea>
            <input type="submit" name="Submit" value="Ajouter">
          </form>
          </div>
        </fieldset>
      </div>
    </div>
    <?php
      if ($_POST['message'] != "") {
          $_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        if ($_POST['message'] == "") {
          $errors .= 'Please enter a message to send.<br>';
        }
      }
      else {
        $errors .= 'Please enter a message to send.<br>';
      }
     ?>
  </body>
</html>
