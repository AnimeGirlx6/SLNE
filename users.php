<?php
include('connection.php');


$query = "SELECT * FROM signup ";
		// get the query result
		$result = mysqli_query($conn, $query);
		// fetch result in array format
		$users = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		mysqli_close($conn);
?>

<?php include('templates/header.php') ?>
<header>
<title></title>
</header>
<h3>Users Table</h3>
<html>
<body>
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php if($users): ?>
    <tr>
      
      <td><?php echo $users['username']; ?></td>
      <td><?php echo $users['email']; ?></td>
      <td><?php echo $users['password']; ?></td>
      <td><?php echo $users['role']; ?></td>
      <td></td>
      <td></td>

      

      
    </tr>
    <?php else: ?>
      <h5>No Users.</h5>
<?php endif; ?>
  </tbody>
</table>
</body>
</html>