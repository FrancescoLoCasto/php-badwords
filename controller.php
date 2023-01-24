<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php-badwords</title>
</head>
<body>
   
<div>
      <p>
         La tua parola è:

         <?php 
            echo $_POST['normal'];
         ?>
      </p>

      <h3>
            ed è composta da:
         <?php 
               echo strlen ($_POST['normal']);
            ?>
      </h3>
   </div>



   <div>

   <h3>
      <?php 
            echo $_POST['censured'];
         ?>
      </h3>

      <h3>
         ed è composta da:
      <?php 
            echo strlen($censuredString);
         ?>
      </h3>

      <p>

      Questo è il tuo testo censurato:

         <?php 
            $censuredString = str_ireplace($_POST['censured'], '***', $_POST['censured']);
            echo $censuredString;
         ?>
      </p>
   </div>


</body>
</html>



