<?php
  include_once "../resources/templates/header.php";
  include_once "../resources/library/connect.php";
?>
<div class="jumbotron">
  <h1 class="text text-title">Welcome to <strong>Open Cloud</strong></h1>
  <h3 class="text text-normal">Created by Zachary Vincze</h3>
</div>
<button class="button button-normal">Login</button>
<button class="button button-normal">Create Account</button>
<?php
  $query = "SELECT * FROM users";
  $stmt = $connect->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  echo $stmt->error;
  while($row = $result->fetch_assoc()) {
    echo $row['username'];
  }
?>
<?php include_once "../resources/templates/footer.php"; ?>
