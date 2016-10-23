<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php storm lesson</title>

</head>
<body>
 <pre>              Формируем URL из строки

     <?

     //require __DIR__ . '/vendor/autoload.php';
     require 'vendor/autoload.php';

     use Cocur\Slugify\Slugify;
     $slugify = new Slugify();
     if (isset($_POST['name'])) {
         echo "<br>              Результат: " . $slugify->slugify($_POST['name'],'_') . "<br>";
         //unset($name);
     }
     unset($_POST['name']);
     ?>
 </pre>

 <form action="index.php" method="post">
    <p>введите строку <input type="text" name="name" /></p>
    <p><input type="submit" /></p>


</form>

 <div style="background-color:grey">
     <?
     use Carbon\Carbon;

     echo " время на сервере: ". Carbon::now();
      ?>
 </div>

</body>
</html>
