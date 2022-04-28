<?php
    $helloWorld = "Hello World!!" ;
    
    for($count = 0 ; $count < strlen($helloWorld) ; $count ++) {
        echo $helloWorld[$count];
    }

    $helloWorldAsArray = str_split($helloWorld);
    foreach ($helloWorldAsArray as $key => $value) {
        echo $helloWorldAsArray[$key].'<br />';
        echo $value;
    }

    $i = 0;
  
    while ($i < strlen($helloWorld)) {
      echo $helloWorld[$i];
       
      $i++;  // Necessário incrementar manualmente o valor de $i
    }

    $i = 0;
 
    do {     
        echo $helloWorld[$i];
        $i++; // Incremento de $i ocorre antes da validação do while  
    } while ($i < strlen($helloWorld)); 
    // Primeira execução acontece mesmo $i sendo igual 0;

?>