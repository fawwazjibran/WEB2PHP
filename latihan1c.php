<!DOCTYPE html>
<html>
  <head>
    <title>Tugas 3</title>
    <style type="text/css">
          .container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid green;
          }
          .row {
              display: flex;
              justify-content: left;
          }
          .box {
            width: 25.5%;
            padding: 10px;
            border: 1px solid #000;
            text-align: center;
            font-size: 30px; 
            line-height: 1;
            margin: 3px;
             
          }
      </style>    
  </head>
  <body>
    <?php

    $a = "A";
    $b = "B";
    $c = "C";
    ?>
    <div class = "container">
          <div class= "row">
          <div class="box"><?php echo $a ?></div>
    </div>
          <div class="row">
            <div class="box"><?php echo $a ?></div>
            <div class="box"><?php echo $b ?></div>
          </div>
    <div class ="row"
      <div class="row">
            <div class="box"><?php echo $a ?></div>
            <div class="box"><?php echo $b ?></div>
            <div class="box"><?php echo $c ?></div>
      </div>
    </div>
  </body>
</html>