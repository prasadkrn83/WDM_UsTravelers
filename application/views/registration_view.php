<?php
$username = array(
    'name' =>'username',
    'id' => 'username',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Username'
);

$password = array(
    'name' => 'pwd1' ,
    'id' => 'pwd1',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Password',
    'type' => 'password'
 );

$renterpassword = array(
    'name' => 'pwd2',
    'id' => 'pwd2',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Re-Enter Password',
    'type' => 'password'
);

$firstname = array(
    'name' => 'fn',
    'id' => 'fn',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter First Name',
    'type' => 'text'
);

$middlename = array(
    'name' => 'mn',
    'id' => 'mn',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Middle Name',
    'type' => 'text'
);

$lastname = array(
    'name' => 'ln',
    'id' => 'ln',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Last Name',
    'type' => 'text'
);

$emailid = array(
    'name' => 'emailid',
    'id' => 'emailid',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Email-Id',
    'type' => 'text'
);

$dob = array(
    'name' => 'dob',
    'id' => 'dob',
    'required' => 'required',
    'class' => 'form-control',
    'type' => 'date'
);


$passport = array(
    'name' => 'passport',
    'id' => 'passport',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Enter Passport Number',
    'type' => 'text'
);

$pexpdate = array(
    'name' => 'pexp',
    'id' => 'pexp',
    'required' => 'required',
    'class' => 'form-control',
    'type' => 'date'
);

$vexpdate = array(
    'name' => 'vexp',
    'id' => 'vexp',
    'required' => 'required',
    'class' => 'form-control',
    'type' => 'date'
);


$addrsline1 = array(
    'name' => 'add1',
    'id' => 'add1',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Address Line 1',
    'type' => 'text'
);

$addrsline2 = array(
    'name' => 'add2',
    'id' => 'add2',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Address Line 2',
    'type' => 'text'
);

$zipcode = array(
    'name' => 'zipcode',
    'id' => 'zipcode',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Zipcode',
    'type' => 'text'
);

$visa = array(
    'name' => 'visa',
    'id' => 'visa',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder'=>'Enter Visa Number',
    'type' => 'text'
);



?>

<body>
<div class="container-fluid">
    <header id="headingBorder">
        <img src="<?php echo base_url();?>/assets/images/logo.png" align="left">
        <h1>USA Travelers</h1>
    </header>
    <div class="content">
        <div id="contentHeader">
            <h2>User Registration Form</h2>
        </div>
        <?php
                        
            echo form_open(base_url().'registration/registerUser','class="form-horizontal" role="form"');
        ?>
            <div class="form-group">
                <div class="col-md-3 with-margin">
                    <?php
                        echo form_label('Username:','username');
                        echo form_input($username);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 with-margin">
                    <?php
                        echo form_label('Password:','password');
                        echo form_input($password);
                    ?>
                </div>
                <div class="col-md-3 with-margin">
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
                <div class="col-md-2 with-margin">
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
                        echo form_label('Email-Id:','emailid');
                        echo form_input($emailid);
                    ?>
                </div>
                <div class="col-md-2 with-margin">
                    <?php
                        echo form_label('Date of Birth:','dob');
                        echo form_input($dob);
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
                <div class="col-md-2 with-margin">
                    <?php
                        echo form_label('Issuing Country:','issuingcountry');
                        echo form_dropdown('issuingcountry', $countryList, '0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="issuingcountry"');
                    ?>
                </div>
                <div class="col-md-2 with-margin">
                    <?php
                        echo form_label('Expiry Date:','pexpdate');
                        echo form_input($pexpdate);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 with-margin">
                    <?php
                        echo form_label('Address Line 1:','addr1');
                        echo form_input($addrsline1);
                    ?>
                </div>
                <div class="col-md-3 with-margin">
                    <?php
                        echo form_label('Address Line 2:','addr2');
                        echo form_input($addrsline2);
                    ?>
                </div>
                <div class="col-lg-3 with-margin">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 with-margin">
                    <?php 
                        echo form_label('Country:', 'country');
                        echo form_dropdown('country', $countryList, '0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="country"');

                ?>
                </div>
                <div class="col-md-2 with-margin">
                    <?php 
                    echo form_label(' State:', 'state');
                    echo form_dropdown('state','--Select State--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="state"');
                ?>
                </div>
                <div class="col-md-2 with-margin">
                    <?php 
                    echo form_label('City:', 'city');
                    echo form_dropdown('city','--Select City--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="city"');
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
                <div class="col-md-2 with-margin">
                    <?php
                                echo form_label('Visa Category:', 'visacategory');
                                echo form_dropdown('visacategory',$visaList, '0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="visacategory"');
                    ?>
                </div>
                <div class="col-md-2 with-margin">
                    <?php
                        echo form_label('Visa Number:','visa');
                        echo form_input($visa);
                    ?>
                </div>
                <div class="col-md-2 with-margin">
                    <?php
                        echo form_label('Expiry Date:','vexpdate');
                        echo form_input($vexpdate);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-md-2 with-margin">
                    <?php
                         echo form_submit('name','Register','class="btn btn-primary"');
                    ?>
                </div>
                <div class="col-md-2 with-margin">
                    <?php
                         echo form_button('name','Cancel','class="btn btn-primary"');
                    ?>
                </div>
            </div>
            <?php
                    echo form_close();
            ?>
</div>