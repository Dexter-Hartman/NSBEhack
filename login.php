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
    
}
}
?>
<form>

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
