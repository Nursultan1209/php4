<?php
    $cols=isset($_POST['cols']);
    $rows=isset($_POST['rows']);
    $color=isset($_POST['color']);
    function drawTable($cols, $rows, $color){
      echo "<table border = '1' width='500' text-align:center>";
      for ($tr = 1; $tr <= $rows; $tr++) {
          echo "<tr>";
              for ($td = 1; $td <= $cols; $td++) { 
                  if ($tr == 1 || $td == 1) {
                    
                     echo "<th style = 'background : {$color}'>" . $tr * $td . "</th>";
                  } else {
                  echo "<td style = 'background : {$color}'>" . $tr * $td . "</td>";
                  }
                }
              }
            }

      function drawMenu($vertical = true){
        if($vertical == true){
       echo " 
        <ul class = 'hr'>
        <li><a href='index.php'>Домой</a>
        </li>
        <li><a href='about.php'>О нас</a>
        </li>
        <li><a href='contact.php'>Контакты</a>
        </li>
        <li><a href='table.php'>Таблица умножения</a>
        </li>
        <li><a href='calc.php'>Калькулятор</a>
        </li>
       </ul>";
        }
        else{
         echo " 
         <ul>
         <li><a href='index.php'>Домой</a>
         </li>
         <li><a href='about.php'>О нас</a>
         </li>
         <li><a href='contact.php'>Контакты</a>
         </li>
         <li><a href='table.php'>Таблица умножения</a>
         </li>
         <li><a href='calc.php'>Калькулятор</a>
         </li>
        </ul>";
        }
     }
