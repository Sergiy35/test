 <?php


try {
   $conec_db = new PDO('mysql:host=localhost;dbname=my_test', 'root', "" );
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
if ($_POST != 0) {
$sql = "INSERT INTO user (users) VALUES (:users)";
$pre_result = $conec_db->prepare($sql);
$pre_result->execute($_POST);
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ran_cod</title>
</head>
<body>
    <div class = "">
      <h1>users</h1>
      <div>

        <form action="index2.php" method="post">
          Ваше имя:<br>
          <input type="text" name="users" >
          <button type="Ferting" >Ferting</button>
        </form>
      </div>
    </div>

</body>
</html>
