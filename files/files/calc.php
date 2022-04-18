<!DOCTYPE html>
<html>

<head>
  <title>Калькулятор</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>



  <div id="content">
    <!-- Заголовок -->
    <h1>Калькулятор школьника</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action='' method="POST">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->
  <?php
    function calculate($num1, $num2, $operator){
      switch($operator){
        case '+': echo $num1+$num2; break;

        case '-': echo $num1-$num2; break;

        case '/': 
          if($num2 == 0){
            echo 'Число на ноль не делиться!!!';
          }
          else{
            echo $num1/$num2;
          }
          break;

        case '*': echo $num1*$num2; break;
    }
  }

  $num1 =$_POST['num1'];
        $num2 =$_POST['num2'];
        $operator =$_POST['operator'];

        calculate($num1,$num2,$operator);
  ?>
</body>

</html>