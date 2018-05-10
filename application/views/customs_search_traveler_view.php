<?php

$passport = array(
    'name' =>'custompassport',
    'id' => 'custompassport',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Passport'
);
$username_cco = array(
    'name' =>'username_cco',
    'id' => 'username_cco',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true'
);

$firstname_cco = array(
    'name' => 'firstname_cco',
    'id' => 'firstname_cco',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$middlename_cco = array(
    'name' => 'middlename_cco',
    'id' => 'middlename_cco',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$lastname_cco = array(
    'name' => 'lastname_cco',
    'id' => 'lastname_cco',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$phonenumber = array(
    'name' => 'phonenumber',
    'id' => 'phonenumber',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$email = array(
    'name' => 'email',
    'id' => 'email',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$dob = array(
    'name' => 'dob',
    'id' => 'dob',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);


$passport_no = array(
    'name' => 'passport_no',
    'id' => 'passport_no',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$issuing_country = array(
    'name' => 'issuing_country',
    'id' => 'issuing_country',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$customsexpdate_cco = array(
    'name' => 'customsexpdate_cco',
    'id' => 'customsexpdate_cco',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);



$addr1 = array(
    'name' => 'customsadd1',
    'id' => 'customsadd1',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$addr2 = array(
    'name' => 'customsadd2',
    'id' => 'customsadd2',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);
$city = array(
    'name' => 'city',
    'id' => 'city',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);
$state = array(
    'name' => 'state',
    'id' => 'state',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);
$country = array(
    'name' => 'country',
    'id' => 'country',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$zipcode = array(
    'name' => 'customszipcode',
    'id' => 'customszipcode',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);

$viscat = array(
    'name' => 'viscat',
    'id' => 'viscat',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);
$visa = array(
    'name' => 'customsvisa',
    'id' => 'customsvisa',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);
$visaexp = array(
    'name' => 'visaexp',
    'id' => 'visaexp',
    'required' => 'required',
    'class' => 'form-control',
    'readonly' =>'true',
    'type' => 'text'
);



?>
<div id="overlay-details">
    <div class="content contentcustoms">
        <div id="contentHeader">
            <h2>Travel Details</h2>
        </div>
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
                    <input readonly="true" class="form-control">
                    <option selected>Selected Country</option>
                    </select>
                </div>
                <div class="col-md-3 with-margin">
                    <label>Departing State:</label>
                    <input readonly="true" class="form-control">
                    <option selected>Selected State</option>
                    </select>
                </div>
                <div class="col-md-3 with-margin">
                    <label>Departing City:</label>
                    <input readonly="true" class="form-control">
                    <option selected>Selected City</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 with-margin">
                    <label>Entry State:</label>
                    <input readonly="true" class="form-control">
                    <option selected>Selected State</option>
                    </select>
                </div>
                <div class="col-md-3 with-margin">
                    <label>Entry City:</label>
                    <input readonly="true" class="form-control">
                    <option selected>Selected City</option>
                    </select>
                </div>
                <div class="col-md-3 with-margin">
                    <label>Port of Entry:</label>
                    <input readonly="true" class="form-control">
                    <option selected>Selected Port of Entry</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div id="placeofstay">
                    <h5>Place of Stay</h5>
                </div>
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
                <div class="col-md-2 with-margin">
                    <label>State:</label>
                    <input readonly="true" class="form-control">
                    <option selected>Selected State</option>
                    </select>
                </div>
                <div class="col-md-2 with-margin">
                    <label>City:</label>
                    <input readonly="true" class="form-control">
                    <option selected>Selected City</option>
                    </select>
                </div>
                <div class="col-md-2 with-margin">
                    <label>Zipcode:</label>
                    <input readonly="true" type="text" class="form-control" id="zipcode" placeholder="Enter Zipcode" name="poszipcode">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 with-margin">
                    <label> Previous Comments:</label>
                    <TEXTAREA readonly="true" type="text" class="form-control col-md-2" id="comments" placeholder="Enter Comments" name="Comments"></TEXTAREA>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 with-margin">
                    <label>Status:</label>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="status" name="status">
                        <option selected>Status</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 with-margin">
                    <label>Comments:</label>
                    <textarea type="text" class="form-control col-md-2" id="comments" placeholder="Enter Comments" name="Comments"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-md-2 with-margin">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-md-2 with-margin">
                    <input type="button" class="btn btn-primary" onclick="off('overlay-details')" value="Cancel">
                    </button>
                </div>
            </div>
            <!-- <div class="form-group">
<div class="col-md-2 col-md-offset-5 with-margin">
<input readonly="true"  type="button" class="btn btn-primary" onclick="off('overlay-details')" value="Close">
</div> -->
    </div>
    </form>
</div>
<div class="content">
    <div id="contentHeader">
        <h2>Search Traveler</h2>
    </div>
        <form class="form-horizontal" id="travelrequest" action="#">

        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Passport:', 'passport');
                    echo form_input($passport);
                ?>
                
            </div>
            <div class="col-xs-offset-1 col-md-2 with-margin">
                <div style="margin-bottom: 3px;">&nbsp;</div>
                <button  class="btn btn-primary" id="searchUser">Search</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('User Name:', 'username_cco');
                    echo form_input($username_cco);
                ?>  
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('First Name:', 'firstname_cco');
                    echo form_input($firstname_cco);
                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Middle Name:', 'middlename_cco');
                    echo form_input($middlename_cco);
                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Last Name:', 'lastname_cco');
                    echo form_input($lastname_cco);
                ?>

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Phone number:', 'phonenumber');
                    echo form_input($phonenumber);
                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Email-Id:', 'email');
                    echo form_input($email);
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Date of birth:', 'dob');
                    echo form_input($dob);
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Passport:', 'passport_no');
                    echo form_input($passport_no);
                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Issuing Country:', 'issuing_country');
                    echo form_input($issuing_country);
                ?>
           </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Expiry Date:', 'expdate_cco');
                    echo form_input($customsexpdate_cco);
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Address Line 1:', 'addr1');
                    echo form_input($addr1);
                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Address Line 2:', 'addr2');
                    echo form_input($addr2);
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('City:', 'city');
                    echo form_input($city);
                ?>
             </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('State:', 'state');
                    echo form_input($state);
                ?>
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Country:', 'country');
                    echo form_input($country);
                ?>
            </div>
            <div class="col-md-2 with-margin">
                <?php 
                    echo form_label('Zip Code:', 'zipcode');
                    echo form_input($zipcode);
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Visa Category:', 'viscat');
                    echo form_input($viscat);
                ?>
             </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Visa Number:', 'visa');
                    echo form_input($visa);
                ?>
           </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Expiry Date:', 'visaexp');
                    echo form_input($visaexp);
                ?>
            </div>
        </div>
</div>