<?php

require('header.php'); 
?>

<!-- insert html/php code here --> 
<?php 

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"/>
<table>
    <tr>
        <td>Select Student: </td>
        <td><select name="sStudent"> 
                <option value="vavl">Value</option> 
            </select>
        </td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subj" id="subj"/></td>
    </tr>
    <tr>
        <td>Comments:</td>
        <td><textarea cols="18" rows="20" name="comments"> </textarea>
</table>
<?php 
require('footer.php');
?>
