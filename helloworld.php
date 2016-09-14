<?php

  $firstName = "Inna";
  $lastName = "Sammel";

  // echo trükib välja muutuja väärtuse
  //echo $firstName;
  //echo $lastName;

  //kaks muutujat prindime välja koos, selleks kasutama punkti
  //tühiku lisamiseks: tühik jutumärkide vahel, tegemist seega stringiga ehk tekstiga
  echo $firstName." ".$lastName;

 ?>

<br>


<?php

  $age = 5; // true - jah, false - ei
  // boolean - võrdus

  if ($age < 18) {
     // kui vastus on tõene
      echo "alaealine";

  } else {
    // kui vastus on väär (false)
      echo "täisealine";
  }
?>


<?php
  for ($i = 1; $i <= $age; $i = $i + 1) {
    echo $i. "palju ";

   }
echo "õnne";

 ?>
<br>

<?php

  echo date ("r");
  

?>
