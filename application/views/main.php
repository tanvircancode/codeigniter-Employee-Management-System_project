<!DOCTYPE html>
<html>
<head>
 <title>Basic Form</title>
 <meta name="viewport" content="width=device-width, ">
 <title>Document</title>
</head>
<body>
    <form method="POST" action="">
      <table>
        <tr>
          <td>Username :  </td>
          <td><input type="text" name="u_name"></td>
        </tr>
        <tr>
          <td>Password :  </td>
          <td><input type="password" name="u_pass"></td>
        </tr>
         <tr>
          <td>Picture :  </td>
          <td><input type="file" name="propic"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="u_login"></td>
        </tr>
      </table>
    </form>

    <?php
    if(isset($_POST['u_login']))
    {
    	$u_name = $_POST['u_name'];
    	$u_pass = md5($_POST['u_pass']);
     // $u_phone = $_POST['u_phone'];

     echo $u_name." ".$u_pass;
    } ?>
</body>
</html>