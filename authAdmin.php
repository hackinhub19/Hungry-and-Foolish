<?php

$adminID = $_POST['uname'];
$adminPass = $_POST['psw'];

if($adminID == 'aptadmin' && $adminPass == 'admin@123')
{
        $s=mysqli_connect("localhost","root","","main");
        $r=mysqli_query($s,"select * from govtupdate");
        
        echo ("<table border='5' width='100%''><tr><th> Current location </th> <th> Destination </th> <th> Nearest Bus Stop </th> <th> Nearest Destination </th></tr>");
        while($i=mysqli_fetch_array($r))
        {
            echo ("<tr> <td> $i[CurrentLocation]</td> <td> $i[Destination]</td> <td> $i[NearestBusStop]</td> <td> $i[NearestDestination]</td></tr>");
        }
        echo "</table>";
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