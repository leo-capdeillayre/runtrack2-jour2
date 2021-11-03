<?php 
for($i = 0; $i<=100; $i++)
    if ($i>=0&&$i<=20) {
        echo "<i>".$i."</i>";
        echo "<br />";

    }elseif ($i>=25&&$i<=41&&$i>=43&&$i<=50) {   
        echo "<u>".$i."</u>";
        echo "<br />";
    }elseif ($i == 42) {
        echo "LaPlateform_";
        echo "<br />";
    }else{  
        echo $i;
        echo "<br />";
    }    
    ?>