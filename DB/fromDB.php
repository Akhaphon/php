<!DOCTYPE html>
<html>
<head>
    <meta charset = 'utf-8'>
    <title>Test from DB</title>
</head>
<body>

<h2>HTML Forms</h2>

<form action="fromDB_get.php" method "post">
  ชื่อ : <br>
  <input type="text" name="firstname" value="">
  <br>นามสกุล : <br>
  <input type="text" name="lastname" value="">
  <br>email : <br>
  <input type="text" name="email" value="">
  <br><br>
  <input type="submit" value="บันทึก" >
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
