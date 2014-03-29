<?php

require('header.php');

 $con=mysqli_connect("localhost","root","","mydb");
 $db = mysql_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die ('<p class="error">Error Connecting to the database'); 
$dbc = mysqli_connect('localhost', 'root', '', 'mydb'); 
mysql_select_db('mydb', $db) or die (mysql_error($db));
?>



<?PHP

$default_status = 'checked'; //sets default radio button status to checked

if (isset($_POST['Submit1'])) {

$selected_radio = $_POST['name']; //when selected, the name of the student should be pushed

//TODO: Determine how to deal with name given as well as date
}

?>
<FORM name ="form1" method ="post" action ="radioButton.php">

<Input type = 'Radio' Name ='name' value= 'Present'
<?PHP print $default_status; ?>
>Here

<P>
<Input type = "Submit" Name = "Submit1" VALUE = "Select a Radio Button">

</FORM>

<?php 
require('footer.php');
?>