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