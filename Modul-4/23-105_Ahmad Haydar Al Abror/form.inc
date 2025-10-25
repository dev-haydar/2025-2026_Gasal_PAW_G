
<form method="POST" action="processdata.php"> 
<label for="surname">Username:</label> 
<input type="text" name="surname" id="surname" value=""> 
<?php 
if (!empty($errors['surname'])) { 
echo "<p style='color:red'>" . $errors['surname'] . "</p>"; 
} 
?> 
<br> 
<input type="submit" value="Submit"> 
</form>

