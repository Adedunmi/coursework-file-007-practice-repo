<?php

require "connection.php";

if (isset($_POST['save'])) {
  $stmt = $connect->prepare('insert into account(fullname,contact,address,email)
       values(:fullname,:contact,:address,:email)');
  $stmt->bindValue('fullname', $_POST['fullname']);
  $stmt->bindValue('contact', $_POST['contact']);
  $stmt->bindValue('address', $_POST['address']);
  $stmt->bindValue('email', $_POST['email']);

  $stmt->execute();
  header("location:index.php");
}

$stmt = $connect->prepare('select * from account');
$stmt->execute();


?>

<!doctype html>
<html lang="en">

<head>
  <title>StoryTellerRegistration</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="jquery.form.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    td {
      padding: 4px 14px;
    }
  </style>
</head>

<body>
  <!--User Registration-->
  <div class="col-md-12">
    <form method="post" autocomplete="off">
      <fieldset>
        <legend>New Tourist Registration</legend>
        <table cellpadding="2" cellspacing="2">
          <tr>
            <td>Fullname</td>
            <td><input id="fullname" type="text" name="fullname" required></td>
          </tr>
          <tr>
            <td>Contact</td>
            <td><input id="contact" type="" name="contact" required></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input id="address" type="text" name="address" required></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input id="email" type="text" name="email" required></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input class="btn btn-success" type="submit" name="save" value="Save"></td>
          </tr>
        </table>
      </fieldset>
    </form>
  </div><br>
  <!--display table data-->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <table cellspacing="2" cellpadding="2" border="1">
          <thead>
            <tr>
              <th>Full name</th>
              <th>Contact</th>
              <th>Address</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($account = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
              <tr>
                <td><?php echo $account->fullname; ?></td>
                <td><?php echo $account->contact; ?></td>
                <td><?php echo $account->address; ?></td>
                <td><?php echo $account->email; ?></td>
                <td>
                  <a onclick="" class="btn btn-danger" href="">Delete</a>
                  <a class="btn btn-primary" href="">Edit</a>
                </td>
              </tr>

            <?php  } ?>

          </tbody>

        </table>

      </div>

</body>

</html>