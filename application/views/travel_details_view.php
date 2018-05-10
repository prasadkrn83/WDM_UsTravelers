<?php 
$travelstartdate = array(
    'name' => 'mytravelstartdate',
    'id' => 'mytravelstartdate',
    'required'=>'required',
    'class'=>'form-control',
    'type' => 'date'
);

$travelenddate = array(
    'name' => 'mytravelenddate',
    'id' => 'mytravelenddate',
    'required'=>'required',
    'class'=>'form-control',
    'type' => 'date'
);
?>

<div id="overlay-details">
    <div class="content myprofile">
        <div id="contentHeader">
            <h2>Travel Details</h2>
        </div>
        <form class="form-horizontal" id="travelrequest" action="registation.php" method="post">
            <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Travel Start Date:</label>
                <input readonly="true" type="date" class="form-control" id="tstartdate" name="tstartdate">
            </div>
            <div class="col-md-3 with-margin">
                <label>Travel End Date:</label>
                <input readonly="true" type="date" class="form-control" id="tenddate" name="tenddate">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Airline Flight Number:</label>
                <input readonly="true" type="text" class="form-control" id="airlinenumber" name="airlinenumber" placeholder="Enter Airline Number">
            </div>
            <div class="col-md-3 with-margin">
                <label>Arrival Time:</label>
                <input readonly="true" type="time" class="form-control" id="arrivaltime" name="arrivaltime">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Departing Country:</label>
                 <input readonly="true" type="text" class="form-control" id="depCountry" name="depCountry">
            </div>
            <div class="col-md-3 with-margin">
                <label>Departing State:</label>
                 <input readonly="true" type="text" class="form-control" id="depState" name="depState">
            </div>
            <div class="col-md-3 with-margin">
                <label>Departing City:</label>
                 <input readonly="true" type="text" class="form-control" id="depCity" name="depCity">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Port of Entry:</label>
                 <input readonly="true" type="text" class="form-control" id="travelPoe" name="travelPoe">
            </div>
        </div>
        <div class="form-group">
            <div id="placeofstay">
                <h5>Place of Stay</h5>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>State:</label>
                 <input readonly="true" type="text" class="form-control" id="posstate" name="posstate">
            </div>
            <div class="col-md-3 with-margin">
                <label>City:</label>
                <input readonly="true" type="text" class="form-control" id="poscity" name="poscity">
            </div>
            <div class="col-md-2 with-margin">
                <label>Zipcode:</label>
                <input readonly="true" type="text" class="form-control" id="poszipcode" placeholder="Enter Zipcode" name="poszipcode">
            </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 col-md-offset-5 with-margin">
                    <input readonly="true" type="button" class="btn btn-primary" onclick="off('overlay-details')" value="Close">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="content">
    <div id="contentHeader">
        <h2>Travel History</h2>
    </div>
    <?php 

            echo form_open(base_url().'traveldetails/getmytraveldetails','class=" col-xs-offset-1 form-horizontal" role="form"');

     ?>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                     echo form_label('Travel Start Date:', 'travelstartdate');
                     echo form_input($travelstartdate);
                    ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                     echo form_label('Travel End Date:', 'travelstartdate');
                     echo form_input($travelenddate);
            ?>
              </div>
              <div class="col-xs-offset-1 col-md-2 with-margin">
                <div style="margin-bottom: 3px;">&nbsp;</div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           
        </div>
    </form>
    <div id="travelhistorydiv">
        <table id="travelhistory" class="display">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Date</th>
                    <th>Port of Entry</th>
                    <th>Details</th>
                </tr>
            </thead>
            <?php
            if(isset($travelDetails)){
                    echo "<tbody>";
                 foreach ($travelDetails as $key=>$data1) {
                   
                echo "<tr>";
                    foreach ($data1 as $key1=>$data) {
                        echo "<tr>";

                        foreach ($data as $d) {
                                        echo "<td>".$d."</td>";
                    }
                    echo "<td><a href='#' onClick=\"loadTravelDetails('".$key1."'); return false;\">Details</a></td>";
                echo "</tr>";
                }
            }
        }

            echo "</tbody>";

        ?>
        </table>
    </div>
</div>