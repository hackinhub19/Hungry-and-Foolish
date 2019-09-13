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
    <td height="300" style="align:center">
      <?php
        $s=mysqli_connect('localhost','root','','main');
        $r=mysqli_query($s,"select * from friendslist");
        
        echo ("<table border='5' width='100%'><tr><th> friend1 </th> <th> friend2 </th> </tr>");
        while($i=mysqli_fetch_array($r))
        {
            echo ("<tr> <td> $i[friend1]</td> <td> $i[friend2]</td> </tr>");
        }
        echo "</table>";
        ?>    
    </td>
    <td height="300" width=></td>
    <td> 
          <a href="">  <button>Update Bus</button> </a> <br><br> 
          <a href=""> <button>Track Bus</button>
    </td>
  </tr>
      </table>
      <table width="125%" height="110%">
  <tr>
   
      <td>
      <h2 align="center"> Conversation </h2>
      <?php
        $s=mysqli_connect('localhost','root','','main');
        $r=mysqli_query($s,"select * from conversation");
        
        echo ("<table border='5%' width='80%'> <tr><th> Sender </th> <th> Message</th> </tr>");
        while($i=mysqli_fetch_array($r))
        {
            echo ("<tr> <td> $i[Sender]</td> <td> $i[Message]</td> </tr>");
        }
        echo "</table>";
        ?>

      </td>
  </tr>

</table>

</body>
</html>
