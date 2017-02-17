
<?php

if (isset($_POST['word'], $_POST['meaning'])) {
if(!empty($_POST['word']) && !empty($_POST['meaning'])) {


$word = $_POST['word'];
$meaning = $_POST['meaning'];


$user = new stdClass();
$user->word = $word;
$user->meaning = $meaning;

$data = json_encode(($user), JSON_PRETTY_PRINT);
$fh = fopen('words.json', 'a+');
fwrite($fh, $data);
fclose($fh);

echo "<script type='text/javascript'>alert('Data Saved');</script>";

}
}

?>
