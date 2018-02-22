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
      <div class="mocheBox">
        <fieldset>
          <h3>A faire</h3>
          <br>
          <input type="submit" value="Enregistrer">
          <br>
          <h3>Archive</h3>
        </fieldset>
      </div>
      <div class="lowerBox">
        <fieldset>
          <h1>Ajouter une tâche</h1>
          <br>
          <br>
          <p>La tâche à effectuer</p>
          <div class="cancerBox">
            <textarea rows="1" cols="30">

            </textarea>
            <input type="submit" value="Ajouter">
          </div>
        </fieldset>
      </div>
    </div>
  </body>
</html>
