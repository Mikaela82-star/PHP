<h1>Tabela czytelnicy</h1>
<?php
    $con = mysqli_connect("localhost","sierak","poleparty01","sierak");

    if($con){
        $result = mysqli_query($con,"SELECT * FROM czytelnicy;");

        if(mysqli_num_rows($result)>0){
            $first_row = mysqli_fetch_assoc($result);

            ?><table><tr><?php

            foreach($first_row as $key => $value){
            
            ?>
                    <td><?=$key?></td>
            <?php
            }

            while($row = mysqli_fetch_assoc($result)){
                ?></tr><tr><?php
                foreach($first_row as $key => $value){
                    ?>
                            <td><?=$value?></td>
                    <?php
                    }
                    ?></tr><?php
            }
            
        }
    }





?>
           </table>