<?php

include '../app/vendor/autoload.php';
$foo = new App\Acme\Foo();

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Docker <?php echo $foo->getName(); ?></title>
    </head>
    <body>
        <h1>Docker <?php echo $foo->getName(); ?></h1>
    </body>
</html>


<?php
$manager = new MongoDB\Driver\Manager("mongodb://mongo:27017/test");

$bulk = new MongoDB\Driver\BulkWrite();
$bulk->insert(['name' => 'John Doe']);

$writeConcern = new MongoDB\Driver\writeConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
$result = $manager->executeBulkWrite('test.mycollection', $bulk);

var_dump($result);



?>

