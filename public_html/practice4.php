<?php
if (isset($_POST['number'])){
    echo "<table border=\"3\">";
    $num = $_POST['number'];
    for ( $i = 1; $i<= $num; $i++ )
    {
        echo "<tr>";
        for ( $j = 1; $j <= $num; $j++ )
        {
            echo "<td>" .($i * $j). "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
