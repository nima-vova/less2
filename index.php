<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php storm lesson</title>

</head>
<body>
<form action="index.php" method="post">
    <p>введите строку <input type="text" name="name" /></p>
    <p><input type="submit" /></p>
</form>
<?

//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';

  use Cocur\Slugify\Slugify;
  $slugify = new Slugify();
  $name=$_POST['name'];
  echo $slugify->slugify($name)."<br>";
      //unset($name);

  use Carbon\Carbon;
  printf("Now: %s", Carbon::now());
?>

</body>
</html>
