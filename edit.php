<?php
require 'connection_pdo.php';
$par_id = $_GET['id'];
$sql = 'SELECT * FROM participants WHERE par_id=:par_id';
$statement = $db->prepare($sql);
$statement->execute([':par_id' => $par_id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['firstname'])  && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['phonenumber']) && isset($_POST['previousschool']) && isset($_POST['center']) && isset($_POST['year']) ) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $phonenumber = $_POST['phonenumber'];
  $previousschool = $_POST['previousschool'];
  $center = $_POST['center'];
  $year = $_POST['year'];
  $sql = 'UPDATE participants SET firstname=:firstname, lastname=:lastname, gender=:gender, phonenumber=:phonenumber, previousschool=:previousschool,center=:center ,year=:year WHERE par_id=:par_id';
  $statement = $db->prepare($sql);
  if ($statement->execute([':firstname' => $firstname, ':lastname' => $lastname, ':gender' => $gender, ':phonenumber' => $phonenumber, ':previousschool' => $previousschool, ':center' => $center, ':year' => $year,':par_id'=>$par_id])) {
    header("Location: view.php");
  }



}


 ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
     <center><h2>Update Participant</h2></center> 
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <center>
      <form method="post">
        <div class="form-group">
          <label for="Firstname">FirstName</label>
          <input value="<?= $person->firstname; ?>" type="text" name="firstname" id="firstname" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="Firstname">LastName</label>
          <input value="<?= $person->lastname; ?>" type="text" name="lastname" id="lastname" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="gender">gender</label>
          <input value="<?= $person->gender; ?>" type="text" name="gender" id="gender" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="phonenumber">Phonenumber</label>
          <input value="<?= $person->phonenumber; ?>" type="text" name="phonenumber" id="phonenumber" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="previousschool">Previousschool</label>
          <input value="<?= $person->previousschool; ?>" type="text" name="previousschool" id="previousschool" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="center">Center</label>
          <input value="<?= $person->center; ?>" type="text" name="center" id="center" class="form-control"><br>
        </div>
        <br>
        <div class="form-group">
          <label for="year">Year</label>
          <input value="<?= $person->year; ?>" type="text" name="year" id="year" class="form-control"><br><br>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Participant</button>
        </div>
      </form>
      </center>
    </div>
  </div>
</div>

