<?php
require_once __DIR__."/vendor/autoload.php";

use Valitron\Validator;

$validator = new Validator($_POST);
$validator->rule('required', ['name', 'email', 'number', 'age', 'pass', 'repass' ] );
$validator->rule('email', 'email');
$validator->rule('email', 'email');

if ($validator->validate()) {
    echo "Validation passed";
} else {

    $coll = collect($validator->errors());

    $messages = $coll->flatten();

    foreach ($messages as $message) {
        echo $message . "\n";
    }
}
?>

<html>

<head>
    <title> FORMULAR</title>
</head>
<form method="POST" action="" enctype="">
    <br>
    User name: <br />
    <input name="name" type="text"  value="" /> <br />
    E-mail: <br />
    <input name="email" type="email"  value="" /> <br />
    Phone number:<br />
    <input name="number" type="number" " value="" /> <br />
    Age:<br />
    <input name="age" type="number"  value="" /> <br />
    Password:<br />
    <input name="pass" type="password"  value="" /> <br />
    Confirm password:<br />
    <input name="repass" type="password"  value="" /> <br />
    Date of birth:<br />
    <input name="date" type="date" value="" /> <br />
    <br>
    <input name="enter"    type="submit"                   value="Enter" />
</form>

