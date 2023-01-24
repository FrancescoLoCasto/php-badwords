
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
            $censuredString = str_ireplace('lorem', '***', $_POST['censured']);
            echo $censuredString;
         ?>
      </p>
   </div>





