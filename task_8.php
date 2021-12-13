<?php

$host = "localhost";
$dbname = "my_test";
$user = "root";
$pass = "";

$conec_db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$pre_result = $conec_db->prepare("SELECT * FROM user");
$pre_result->execute();
$result = $pre_result->fetchALL(PDO::FETCH_ASSOC);

 
 ?>
<!DOCTYPE html>
<html>
<head>
  <style>
    hr {
    border: none; /* Убираем границу */
    background-color: red; /* Цвет линии */
    color: red; /* Цвет линии для IE6-7 */
    height: 2px; /* Толщина линии */
   }
   th {
    background: #008EB0; /* Синий цвет фона */
    color: #fff; /* Белый цвет текста */
    border: none; /* Убираем рамку */
    padding:0.2rem 0.2rem; /* Поля вокруг текста */
    margin-bottom: 0.1rem; /* Отступ снизу */
   }
   button {
    background: #008EB0; /* Синий цвет фона */
    color: #fff; /* Белый цвет текста */
    border: none; /* Убираем рамку */
    padding:0.8rem 1rem; /* Поля вокруг текста */
    margin-bottom: 0.1rem; /* Отступ снизу */
   }

   .green { background: #73A353; }
   .red { background: #C1172C; }
   .orange { background: #F7941E; }
   .grenes { background: #75f81e; }
  </style>
  <meta charset="utf-8">
  <title>ran_cod</title>
</head>
<body>
    <div class = "">
      <h1>users</h1>
      <div>
        <table>
          <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th><hr>
          </thead>
          <?php foreach($result as $row){?>
          <tbody>
            <th><?php echo $row['id'];?></th>
            <th><?php echo $row['users'];?></th>
            <th><?php echo $row['age'];?></th>
            <th><?php echo $row['salary'];?></th>
              <th><a href="show.php?id=<?php echo $row['id'];?>" style="text-align:"><button class="green">Редактировать</button></th>
              <th><a href="edit.php?id=<?php echo $row['id'];?>" style="text-align:"><button class="orange">Добавить</button></th>
              <th><a href="delete.php?id=<?php echo $row['id'];?>" style="text-align:"><button class="red">Удалить</button> </th>

            <?}?>
            
          </tbody>
        </table>
      </div>
    </div>

</body>
</html>
