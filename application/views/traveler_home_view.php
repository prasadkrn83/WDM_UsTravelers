<div class="contentnoborder">
  
    <div class="content" >
        <div id="contentHeader">
            <h3>My Travel</h3>
        </div>
        <br>
        <div id="travelhistorydiv">
            <table id="travelhistory" class="display">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Date</th>
                        <th>Port of Entry</th>
                    </tr>
                </thead>

                  <?php 
            if(isset($travelHistory)){
                    echo "<tbody>";

                    foreach ($travelHistory as $key1=>$data) {
                        echo "<tr>";

                        foreach ($data as $d) {
                                        echo "<td>".$d."</td>";
                    }
                        echo "</tr>";
                }
            }

            echo "</tbody>";

        ?>
            </table>
        </div>
    </div>
</div>
</div>