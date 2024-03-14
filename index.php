<?php
require 'app/Parser.php';
use app\Parser;

$fileName = $_FILES['file']['tmp_name'];
if (!empty($fileName)) {
    $parser = new Parser($fileName);
    var_dump($parser->getData());
    var_dump($parser->getInfo());
}
?>

<form enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <button>Отправить</button>
</form>
