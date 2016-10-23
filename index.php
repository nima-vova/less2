<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php storm lesson</title>

</head>
<body>
<?
require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;
$slugify = new Slugify();
//echo $slugify->slugify('Hello World, this is a long sentence and I need to make a slug from it!');
$name=$_POST['name'];
if (isset($name) ){
    echo $slugify->slugify($name);
      //unset($name);
}
else {

    unset($name);
}
?>

<form action="index.php" method="post">
    <p>введите строку <input type="text" name="name" /></p>
    <p><input type="submit" /></p>
</form>

</body>
</html>