<?php

require_once "config.php";

$username = $_POST['deluser'];
$password = $_POST['delpass'];

$obj = new Sql();
$alert = $obj->deletaUsuario($username, $password);

echo "<script>alert('".$alert."')</script>";
echo "<script>location.href = 'index.php'</script>";

?>