<?php
$i=0;
require_once 'DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";$bg_background="bg-success";

?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
<header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="index.php">BBMS</a></h1>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a class="current" href="members.php">Members</a></li>
        </ul>
      </div>
    </nav>
  </header>
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php if(isset($users)): $i++;?>
            <table class="table table-condensed">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>D.O.B</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>City</th>
                <th>Mobile</th>
                </thead>
                <?php foreach($users as $u): $i++;?>
                <tr class="<?php if($i%2==0){echo $bg_background;}else{echo 'bg-danger';} ?>">
                    <td><?= $u['first_name']." ".$u['last_name']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td><?= $u['dob']; ?></td>
                    <td><?= $u['gender']; ?></td>
                    <td><?= $u['b_type']; ?></td>
                    <td><?= wordwrap($u['address'], 26, '<br>'); ?></td>
                    <td><?= $u['city']; ?></td>
                    <td><?= $u['mobile']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>