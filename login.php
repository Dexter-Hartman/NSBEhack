<?php
/*
 * 
 * <p><label for="finame" class="label">First Name:</label><input type="text" name="fname" id="fname"/> </p>
          <p><label for="laname" class="label">Last Name:</label><input type="text" name="lname" id="lname"/></p>
 */
require('header.php'); 
?>

<?php 
if(isset($_POST['Login']))
{
    $error = array(); 
    $username = isset($_POST['username']) ? trim($_POST['username']) : ''; if (empty($username)) { $error[] = 'Please fill in your User name'; }
    $password = isset($_POST['password']) ? trim($_POST['password']) : ''; if (empty($password)) { $error[] = 'Please fill in your Password'; }

foreach($error as $display_error) { echo '<p class="error">' . $display_error . '</p>'; }
if(empty($error)) 
{
 $con=mysqli_connect("localhost","root","","mydb");
if (mysqli_connect_errno())
	  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
 // $result = mysqli_query($con,"SELECT userName, password, accountType FROM users WHERE userName='$userName' AND password='$password' ");
 $query = "SELECT idUsers, userName, password FROM users WHERE userName='$userName' AND " . "password='$password'";
 $data = mysqli_query($con, $query);
    if(mysqli_num_rows($data) == 1)
    {
        echo ' It works '; 
        $row = mysqli_fetch_array($data);
        $user_id = $row['username']; 
        $password = $row['password']; 
    }
    else
    {
        echo 'It does not work \n ';
    }
}
}
?>
<form acion="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    

    <table align="center"> 
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" id="username"/></td> 
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" id="password" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="Login" value="Login" id="Login" /></td>
        </tr>
    </table>
</form>

<?php 
require('footer.php');
?>
