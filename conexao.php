<?php
$hos = 'mysql:host=localhost;dbname=imagens;charset=uft8';
$usr = 'root';
$pwd = '';
$opcoes =array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
try{
	$pdo =new PDO($hos,$usr,$pwd,$opcoes);
} catch (PDOException $ex) {
	echo "Ocorreu um erro ".$ex->getMessage();
}
?>

<?php
try {
    $host = 'localhost;charset=utf8';
    $dbnm = '';
    $user = 'root';
    $pass = '';
    $dbh = new PDO('mysql:host='.$host.';dbname=teste'.$dbnm, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
