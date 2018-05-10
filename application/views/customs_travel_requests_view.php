<?php

$travelstartdate = array(
    'name' =>'travelstartdate',
    'id' => 'travelstartdate',
    'required' => 'required',
    'class' => 'form-control',
    'value'=>'01/01/2018',
    'type' => 'date'

);
$travelenddate = array(
    'name' =>'travelenddate',
    'id' => 'travelenddate',
    'required' => 'required',
    'class' => 'form-control',
    'value'=>'12/31/2018',
    'type' => 'date'
);

?>
<div id="overlay-details">
<div class="content contentcustoms">
    <div id="contentHeader">
        <h2>Travel Details</h2>
    </div>
    <form class="form-horizontal" id="travelrequest" action="#" method="post">
        <input type="hidden" id="travelId">
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
            <div class="col-md-6 with-margin">
                <label> Previous Comments:</label>
                <TEXTAREA readonly="true" type="text" class="form-control col-md-2" id="prevcomments"  name="prevcommentss"></TEXTAREA>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Status:</label>
                <?php 
                    echo form_dropdown('currstat',$statusList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="currstat"'); 
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 with-margin">
                <label>Comments:</label>
                <textarea type="text" class="form-control col-md-2" id="Comments" placeholder="Enter Comments" name="Comments"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-md-2 with-margin">
                <button type="button" class="btn btn-primary" id="submitTravelReviewbtn">Submit</button>
            </div>
            <div class="col-md-2 with-margin">
                <input type="button" class="btn btn-primary" onclick="off('overlay-details')" value="Cancel">
                </button>
            </div>
        </div>
    </form>
</div>
</div>
<div class="content">
<div id="contentHeader">
    <h2>Travel Details</h2>
</div>
<form class="col-xs-offset-1 form-horizontal" id="travelrequest" action="<?php echo base_url();?>customstravelrequests/searchTravelRequest" method="post">
    <div class="form-group">
        <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Travel Start Date:', 'travelstartdate');
                    echo form_input($travelstartdate);
                ?>

            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Travel End Date:', 'travelenddate');
                    echo form_input($travelenddate);
                ?>

            </div>
        <div class="col-md-3 with-margin">
            <?php 
                    echo form_label('Status:', 'entstate');
                    echo form_dropdown('entstate',$statusList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entstate"');            ?>
           
        </div>
        <div class=" col-md-2 with-margin">
            <div style="margin-bottom: 3px;">&nbsp;</div>
            <input  type="submit" class="btn btn-primary" id="searchTravelReqBtn"></input>
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
                <th>Status</th>
                <th>Review</th>
            </tr>
        </thead>
        <?php 
            if(isset($travelDetails)){
                    echo "<tbody>";
                
                foreach ($travelDetails as $key=>$value) {
                echo "<tr>";

                    foreach ($value as $key1=>$data) {
                        foreach ($data as $d) {
                                        echo "<td>".$d."</td>";
                    }

                echo "<td><a href='#' onClick=\"loadTravelDetails('".$key1."'); return false;\">Details</a></td>";
                }
                
                echo "</tr>";


            }
            }

            echo "</tbody>";

        ?>
        
    </table>
</div>
</div>