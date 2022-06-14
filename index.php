<?php
    require "header.php";
?>
<div class="index-page">

    <?php
        if (isset($_SESSION["username"])){
            $distance_list = explode(".", $_SESSION["mixed_distances"]);
            $date_list = explode(".", $_SESSION["mixed_dates"]);



            echo "<table>
                    <tr>
                        <th>Number</th>
                        <th>Date</th>
                        <th>Distance (miles)</th>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>YYYY/MM/DD</td>
                        <td>0</td>
                    </tr>";

            for ($i=1; $i < count($distance_list); $i++){
                echo "<tr><td>".$i."</td><td>".$date_list[$i]."</td><td>".$distance_list[$i]."</td></tr>";
            }

            echo "</table>";

        } else {
            echo "<p>Currently Logged Out</p>";
        }
    ?>


</div>
<script>

    var scriptDistances = <?= json_encode($distance_list);?>;
    var scriptDates = <?= json_encode($date_list);?>;

    populateTable(scriptDates, scriptDistances)

    function populateTable(data1, data2){
        var table = document.getElementById("data-table")

        for (var i=1; i < data1.length; i++){
            var row = "<tr>" +
                "<td>[i+1]</td>" +
                "<td>${data1[i]}</td>" +
                "<td>${data2[i]}</td>" +
                "</tr>"
            table.innerHTML += row
        }
    }
</script>



