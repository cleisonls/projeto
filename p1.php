<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RoyalsTour  </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

	<body>
	<?php include "conexao.php";

	?>
 
		<div class="container">
         <div class="row">
        <?php
        $stmt = $dbh->prepare("SELECT * FROM flamengo");
        if ($stmt->execute()) {
            while ($row = $stmt->fetch()) {
        ?>
       <div class="col-sm-4">
			<br>
              <img src="img/<?php echo $row['imagem'] ?>" alt="<?php echo $row['imagem'] ?>" style="height:150px;width:100%;">
              <div class="caption text-center">
                <h3><?php echo $row['regiao'] ?></h3>
				<strong>Ponto Turistico</strong>:<?php echo $row['pontos']?>
               </p>
              </div>
            </div>
		<?php
            }
        }
        ?>
        </div>   </div>
    </div>
	<?php
		$dbh = null;
	?>
</body>
</html>

