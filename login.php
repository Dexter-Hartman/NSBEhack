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
    $username = isset($_POST['username']) ? trim($_POST['username']) : ''; if (empty($fname)) { $error[] = 'Please fill in your First Name'; }
    $password = isset($_POST['password']) ? trim($_POST['password']) : ''; if (empty($lname)) { $error[] = 'Please fill in your Last Name'; }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="LoginForm">
    <table align="center"> 
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" id="username" /></td> 
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
