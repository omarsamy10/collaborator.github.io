<html>
<body>
  <h1>
    welcome to my ssrf test
  </h1>
<form method='GET' action='index.php'>
<input type='text' name='name'/>
<input  type='text' name='password' />
<input  type='submit' value='submit' /> 
</form>
</body>

<?php echo $_GET[""]; ?>
</html>
