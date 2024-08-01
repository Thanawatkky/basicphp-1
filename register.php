<?php 
  include 'connect.php';
?>
<!DOCTYPE html>
<html>
<style>
  input,
  select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover:not(.active) {
    background-color: #111;
  }

  .active {
    background-color: #04AA6D;
  }
</style>

<body>
  <ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="register.php">All user</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
    <li style="float:right">
      <a class="active" href="logout.php">Logout</a>
    </li>
  </ul>
  <?php
    if(isset($_REQUEST['user_id'])) {
      $sql = "SELECT * FROM tb_user WHERE user_id='".$_REQUEST['user_id']."' ";
      $query = $conn->query($sql);
      $fet = $query->fetch_object();
  ?>
  <h3>แก้ไขข้อมูลผู้ใช้</h3>
  <div>
    <form action="api/api_register.php" method="post">
      <label for="username">Username</label>
      <input type="text" id="fname" value="<?php echo $fet->username; ?>" name="username" placeholder="Your username..">

      <label for="password">Password</label>
      <input type="password" id="lname" value="<?php echo $fet->password; ?>" name="password" placeholder="Your password..">

      <label for="fullname">fullname</label>
      <input type="text" id="lname" name="fullname" value="<?php echo $fet->fullname; ?>" placeholder="Your fullname..">

      <label for="phone">Phone number</label>
      <input type="tel" id="lname" name="phone" value="<?php echo $fet->phone; ?>" placeholder="Your phone number..">

      <label for="email">Email</label>
      <input type="email" id="lname" name="email" value="<?php echo $fet->email; ?>" placeholder="Your email..">

      <label for="linetoken">Line Token</label>
      <input type="text" id="lname" name="linetoken" value="<?php echo $fet->linetoken; ?>" placeholder="Your linetoken..">

      <input type="submit" value="Submit">
    </form>
  </div>
    <?php }else{ ?>
      <h3>เพิ่มผู้ใช้งาน</h3>
      <div>
    <form action="api/api_register.php" method="post">
      <label for="username">Username</label>
      <input type="text" id="fname" name="username" placeholder="Your username..">

      <label for="password">Password</label>
      <input type="password" id="lname" name="password" placeholder="Your password..">

      <label for="fullname">fullname</label>
      <input type="text" id="lname" name="fullname" placeholder="Your fullname..">

      <label for="phone">Phone number</label>
      <input type="tel" id="lname" name="phone" placeholder="Your phone number..">

      <label for="email">Email</label>
      <input type="email" id="lname" name="email" placeholder="Your email..">

      <label for="linetoken">Line Token</label>
      <input type="text" id="lname" name="linetoken" placeholder="Your linetoken..">

      <input type="submit" value="Submit">
    </form>
  </div>
      <?php } ?>
  

</body>

</html>