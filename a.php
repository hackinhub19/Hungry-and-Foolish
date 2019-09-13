<?php
        $s=mysqli_connect('localhost','root','','main');
        $r=mysqli_query($s,"select * from detail");
        
        echo ("<table border='5%' width='80%'> <tr><th> Bus Id </th> <th> Route</th> </tr>");
        while($i=mysqli_fetch_array($r))
        {
            echo ("<tr> <td> $i[Busid]</td> <td> $i[Route]</td> </tr>");
        }
        echo "</table>";
        ?>