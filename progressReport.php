<?php
require('header.php'); 
?>
<!-- Form/validation/SQL -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"/>
<?php
$query = "Select idUsers, fname, lname FROM Users WHERE acountType = '2'";
$result = mysqli_query($con, $query);
?>
<table align="center">
    <tr>
        <td>Select Student: </td>
        <td><select name="sStudent"> 
                <option value="def" selected>Choose a Student</option>
                <?php 
                while($row = mysqli_fetch_array($result))
                {
                    // echo "<td>" . $row['idNumb'] . "</td>";
                    echo "<option value='" . $row['idUsers'] . "'>" . $row['lname'] . ' '  . $row['fname'] . "</option>" ;
                }
                ?>
             
            </select>
        </td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subj" id="subj"/></td>
    </tr>
    <tr>
        <td>Comments:</td>
        <td><textarea cols="55" rows="10" name="comments"> </textarea>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="Submit" value="Commit"/></td>
    </tr>
    
</table>
<?php 
require('footer.php');
?>