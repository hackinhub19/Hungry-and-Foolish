<?php

$userID = $_POST['uname'];
$userPass = $_POST['psw'];

if($userID == 'aptuser' && $userPass == 'user@123')
{
    echo ('
    <!DOCTYPE html>
<html>
<body>

<h2 align="center">Updates</h2>

<table style="width:100%" border="5%">
  <tr>
    <th>Friends Update</th>
    <th>Make your update</th> 
    <th>Bus Information</th>
  </tr>
  <tr>
    <td height="300" style="align:center">');
    include 'flist.php';
    echo('</td>
    <td height="300"><a href="a.php"> <button>Update Bus</button> </a></td>
    <td> 
          
          <a href=""> <button>Track Bus</button> </a>
    </td>
  </tr>
      </table>
      <table width="125%" height="110%">
  <tr>
   
      <td>
      <h2> Conversation </h2>');
      include 'clist.php';
     echo(' </td>
  </tr>

</table>

</body>
</html>
');

}
else
{
    echo('
        <script>
            alert("Invalid User Credentials!");
        </script>
    ');
}


?>