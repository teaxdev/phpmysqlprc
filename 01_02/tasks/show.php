<?php

// hostname: "127.0.0.1"
// username: "mariadb"
// password: "mariadb"
// database: "mariadb"
// port:     3306
try {
  $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=mariadb', 'mariadb', 'mariadb');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // return first row
  $sql = "SELECT * FROM tasks LIMIT 1";
  $result = $pdo->query($sql);

  // fetch the data we returned
  $task = $result->fetch(PDO::FETCH_OBJ);
  echo $task->description;
} catch (PDOException $e) {
  echo "db error: " . $e->getMessage();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Task Manager: Show Task</title>
  </head>
  <body>

    <header>
      <h1>Task Manager</h1>
    </header>

    <section>

      <h1>Show Task</h1>

      <dl>
        <dt>ID</dt>
        <dd></dd>
      </dl>
      <dl>
        <dt>Priority</dt>
        <dd><?php echo $task->priority; ?></dd>
      </dl>
      <dl>
        <dt>Completed</dt>
        <dd><?php echo $task->completed == 1 ? 'true' : 'false'; ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo $task-> $description ?></dd>
      </dl>

    </section>

  </body>
</html>
<?php 
$result->free();

$pdo->close()
?>