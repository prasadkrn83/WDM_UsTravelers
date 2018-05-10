<?php

$user=$this->session->userdata('user');
$countryList = $this->session->userdata('countryList');
$usStateList = $this->session->userdata('usStateList');
$visaList =$this->session->userdata('visaList');
$username = array(
    'name' =>'username',
    'id' => 'username',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'username',
    'value'=> $user->getUserId(),
    'readonly'=> "true"
);

$password = array(
    'name' => 'pwd1' ,
    'id' => 'pwd1',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Password',
    'value'=> $user->getPassword(),
    'type' => 'password'
 );

$renterpassword = array(
    'name' => 'pwd2',
    'id' => 'pwd2',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Re-Enter Password',
    'value'=> $user->getPassword(),
    'type' => 'password'
);

$firstname = array(
    'name' => 'fn',
    'id' => 'fn',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter First Name',
    'value'=> $user->getFname(),
    'type' => 'text'
);

$middlename = array(
    'name' => 'mn',
    'id' => 'mn',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Middle Name',
    'value'=> $user->getMname(),
    'type' => 'text'
);

$lastname = array(
    'name' => 'ln',
    'id' => 'ln',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Last Name',
    'value'=> $user->getLname(),
    'type' => 'text'
);

$dob = array(
    'name' => 'dob',
    'id' => 'username',
    'required' => 'required',
    'class' => 'form-control',
    'value'=> $user->getDob(),
    'type' => 'date'
);

$passport = array(
    'name' => 'passport',
    'id' => 'passport',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Passport Number',
    'value'=> $user->getPassport(),
    'type' => 'text'
);

$expdate = array(
    'name' => 'vexpdate',
    'id' => 'vexpdate',
    'required' => 'required',
    'class' => 'form-control',
    'value'=> $user->getVisaExpDate(),
    'type' => 'date'
);

$pexpdate = array(
    'name' => 'pexp',
    'id' => 'pexp',
    'required' => 'required',
    'class' => 'form-control',
    'value'=> $user->getPexpdate(),
    'type' => 'date'
);
$emailId = array(
    'name' => 'emailId',
    'id' => 'emailId',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Address Line 1',
    'value'=> $user->getEmailId(),
    'type' => 'text'
);

$addrsline1 = array(
    'name' => 'add1',
    'id' => 'add1',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Address Line 1',
    'value'=> $user->getAddress1(),
    'type' => 'text'
);

$addrsline2 = array(
    'name' => 'add2',
    'id' => 'add2',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Address Line 2',
    'value'=> $user->getAddress2(),
    'type' => 'text'
);

$zipcode = array(
    'name' => 'zipcode',
    'id' => 'zipcode',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Zipcode',
    'value'=> $user->getZipcode(),
    'type' => 'text'
);

$visa = array(
    'name' => 'visa',
    'id' => 'visa',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Visa Number',
    'value'=> $user->getVisaNumber(),
    'type' => 'text'
);

$hidden = array(
    'type'=>'hidden',
    'name' => 'id',
    'value'=> $user->getId(),
    'id' => 'id'
);
$hidden1 = array(
    'type'=>'hidden',
    'name' => 'hcountryid',
    'value'=> $user->getCountryId(),
    'id' => 'hcountryid'
);
$hidden2 = array(
    'type'=>'hidden',
    'name' => 'hcityid',
    'value'=> $user->getCityId(),
    'id' => 'hcityid'
);
$hidden3 = array(
    'type'=>'hidden',
    'name' => 'hstateid',
    'value'=> $user->getStateId(),
    'id' => 'hstateid'
);
?>

<div id="overlay">
            <div class="content myprofile">
                <div id="contentHeader">
                    <h2>My Profile</h2>
                </div>
                <!-- <form class="form-horizontal" id="myprofileform" action="registation.php" method="post"> -->
                <?php
                  echo form_open(base_url().'registration/updateprofile','class="form-horizontal" id="myprofileform"');
                  echo form_input($hidden);

                  echo form_input($hidden1);

                  echo form_input($hidden2);

                  echo form_input($hidden3);
                ?>
                    <div class="form-group">
                        <div class="col-md-3 with-margin">
                            <!-- <label>Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" readonly="true"> -->
                            <?php
                                echo form_label('Username:','username');
                                echo form_input($username);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 with-margin">
                            <!-- <label>Password:</label>
                            <input type="password" class="form-control" id="pwd1" placeholder="Enter Password" name="pwd1"> -->
                            <?php
                                echo form_label('Password:','password');
                                echo form_input($password);
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <!-- <label>Renter Password:</label>
                            <input type="password" class="form-control" id="pwd2" placeholder="Re-Enter Password" name="pwd2"> -->
                            <?php
                                echo form_label('Renter Password:','renterpassword');
                                echo form_input($renterpassword);
                            ?>
                        </div>
                        <div class="col-lg-3 with-margin">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('First Name:','firstname');
                                echo form_input($firstname);
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Middle Name:','middlename');
                                echo form_input($middlename);
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Last Name:','lastname');
                                echo form_input($lastname);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Date of Birth:','dob');
                                echo form_input($dob);
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Email-ID:','emailId');
                                echo form_input($emailId);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Passport:','passport');
                                echo form_input($passport);
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Issuing Country:','issuingcountry');
                                echo form_dropdown('issuingcountry', $countryList, $user->getCountryId(),'class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="issuingcountry"');
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Expiry Date:','expdate');
                                echo form_input($pexpdate);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Address Line 1:','addrsline1');
                                echo form_input($addrsline1);
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Address Line 2:','addrsline2');
                                echo form_input($addrsline2);
                            ?>
                        </div>
                        <div class="col-lg-3 with-margin">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Country:','regcountry');
                                echo form_dropdown('regcountry', $countryList, $user->getCountryId(),'class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="regcountry"');
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('State:', 'regstate');
                                echo form_dropdown('regstate','-Select State-',$user->getStateId(),'class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="regstate"');
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('City:', 'regcity');
                                echo form_dropdown('regcity','-Select City-',$user->getCityId(),'class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="regcity"');
                            ?>
                        </div>
                        <div class="col-md-2 with-margin">
                            <?php
                                echo form_label('Zipcode:','zipcode');
                                echo form_input($zipcode);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Visa Category:', 'visacategory');
                                echo form_dropdown('visacategory',$visaList, $user->getVisatypeId(),'class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="visacategory"');
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Visa Number:','visa');
                                echo form_input($visa);
                            ?>
                        </div>
                        <div class="col-md-3 with-margin">
                            <?php
                                echo form_label('Expiry Date:','expdate');
                                echo form_input($expdate);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-md-2 with-margin">
                            <!-- <button type="submit" class="btn btn-primary">Save</button> -->
                            <?php
                                echo form_submit('name','Save','class="btn btn-primary" id="myprofilesubmit"');

                            ?>
                        </div>
                        <div class="col-md-2 with-margin">
                            <!-- <input type="button" class="btn btn-primary" onclick="off('overlay')" value="Cancel">
                            </button> -->
                            <?php
                                echo form_button('name','Cancel','class="btn btn-primary" onclick="off(\'overlay\')"');
                            ?>
                        </div>
                    </div>
                </form>
    </div>
</div>
