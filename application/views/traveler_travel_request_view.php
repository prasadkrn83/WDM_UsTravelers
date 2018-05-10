<?php 
$today=date("Y-m-d");

$mod_date = strtotime($today."7 days");

$tstartdate = array(
    'name' => 'tstartdate',
    'id' => 'tstartdate',
    'required'=>'required',
    'class'=>'form-control',
    'type' => 'date',
    'onkeydown'=>'return false',
    'min'=>date("Y-m-d",$mod_date)
);

$tenddate = array(
    'name' => 'tenddate',
    'id' => 'tenddate',
    'required'=>'required',
    'class'=>'form-control',
    'type' => 'date'
);

$airlinenumber = array(
    'name' => 'airlinenumber',
    'id' => 'airlinenumber',
    'required'=>'required',
    'class'=>'form-control',
    'placeholder'=>'Enter Airline Number'
);

$arrivaltime = array(
    'name' => 'arrivaltime',
    'id' => 'arrivaltime',
    'required'=>'required',
    'class'=>'form-control',
    'type' => 'time'
);

$usaddrsline1 = array(
    'name' => 'usadd1',
    'id' => 'usadd1',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Address Line 1',
    'type' => 'text'
);

$usaddrsline2 = array(
    'name' => 'usadd2',
    'id' => 'usadd2',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Address Line 2',
    'type' => 'text'
);
$poszipcode = array(
    'name' => 'poszipcode',
    'id' => 'poszipcode',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Zipcode',
    'type' => 'text'
);
$countryList=$this->session->userdata('countryList');
$usStateList=$this->session->userdata('usStateList');

?>
<div class="content contenttravel">
    <div id="contentHeader">
        <h2>New Travel Request</h2>
    </div>
    <?php
            if(isset($isInsert) && $isInsert==true){
    ?>
                <br>
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <div class="alert alert-success alert-dismissible">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 <strong>New Travel Request Submitted Successfully!!</strong></div>
                            </div>
                        </div>
                    </div>

    <?php
            }                        
            echo form_open(base_url().'travelertravelrequest/createTravelRequest','class="form-horizontal" role="form"');
        ?>        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Travel Start Date:', 'tstartdate');
                    echo form_input($tstartdate);
                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Travel End Date:', 'tenddate');
                    echo form_input($tenddate);
                ?>                
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Airline Flight Number:', 'airlinenumber');
                    echo form_input($airlinenumber);
                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Arrival Time:', 'arrivaltime');
                    echo form_input($arrivaltime);
                ?>                
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Departing Country:', 'depcountry');
                    echo form_dropdown('depcountry', $countryList, '0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="depcountry"');

                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Departing State:', 'depstate');
                    echo form_dropdown('depstate','--Select State--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="depstate"');
                ?>                
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Departing City:', 'depcity');
                    echo form_dropdown('depcity','--Select City--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="depcity"');
                ?>                
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Entry State:', 'entstate');
                    echo form_dropdown('entrystate',$usStateList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entrystate"');
                ?>
                
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Entry City:', 'entrycity');
                    echo form_dropdown('entrycity','--Select City--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entrycity"');
                ?>
                
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Port of Entry:', 'poe');
                     echo form_dropdown('poe','--Select Port Of Entry--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="poe"');
                ?>
            </div>
        </div>
        <div class="form-group">
            <div id="placeofstay">
                <h5>Place of Stay</h5>
            </div>
        </div>
        <div class="form-group">
                <div class="col-md-3 with-margin">
                    <?php
                        echo form_label('Address Line 1:','usadd1');
                        echo form_input($usaddrsline1);
                    ?>
                </div>
                <div class="col-md-3 with-margin">
                    <?php
                        echo form_label('Address Line 2:','usadd2');
                        echo form_input($usaddrsline2);
                    ?>
                </div>
                <div class="col-lg-3 with-margin">
                </div>
            </div>
        <div class="form-group">

            <div class="col-md-2 with-margin">
                <?php 
                    echo form_label('State:', 'posstate');
                    echo form_dropdown('posstate',$usStateList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="posstate"');
                ?>               
            </div>
            <div class="col-md-2 with-margin">
                <?php 
                    echo form_label('City:', 'poscity');
                     echo form_dropdown('poscity','--Select City--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="poscity"');
                ?>
                
            </div>
            <div class="col-md-2 with-margin">
                <?php 
                    echo form_label('Zipcode:', 'zipcode');
                    echo form_input($poszipcode);

                ?>
                
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-md-2 with-margin">
                <?php 
                    echo form_submit('submit', 'Submit','class="btn btn-primary"');
                ?>
            </div>
            <div class="col-md-2 with-margin">
                <?php 
                    echo form_reset ('Cancel', 'Cancel','class="btn btn-primary"');
                ?>
            </div>
        </div>
        <?php
            echo form_close();
        ?>
</div>