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