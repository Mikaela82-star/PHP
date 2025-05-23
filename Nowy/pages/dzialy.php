<h1>Tabela działy</h1>

<?php
    $con = mysqli_connect("localhost","sierak","poleparty01","sierak");

    if($con){
        $result = mysqli_query($con,"SELECT * FROM dzialy;");

        if(mysqli_num_rows($result)>0){
            $first_row = mysqli_fetch_assoc($result);

            ?><tr><?php

            foreach($first_row as $key => $value){
                echo $key,"\n";
            }

            ?><tr><?php

            while($row = mysqli_fetch_assoc($result)){

            }
        }
    }





?>