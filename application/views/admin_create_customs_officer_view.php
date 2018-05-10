<div class="content">
    <div id="contentHeader">
        <h2>Custom Officer Details</h2>
    </div>
    <?php 
                            if(isset($isInsert) && $isInsert){
                        ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <div class="alert alert-success  alert-dismissible">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 Custom officer created successfully!
                             </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        }
                        ?>
    <form class="form-horizontal" id="create_custom_officer" action="<?php echo base_url();?>registration/createcustomofficer" method="post">
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>User Name:</label>
                <input type="text" class="form-control" id="username_cco" placeholder="Enter Username" name="username_cco">
            </div>
            <div class="col-md-3 with-margin">
                <label>Password:</label>
                <input type="password" class="form-control" id="pwd_cco" placeholder="Enter Password" name="pwd_cco">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>First Name:</label>
                <input type="text" class="form-control" id="firstname_cco" placeholder="Enter First Name" name="firstname_cco">
            </div>
            <div class="col-md-3 with-margin">
                <label>Middle Name:</label>
                <input type="text" class="form-control" id="middlename_cco" placeholder="Enter Middle Name" name="middlename_cco">
            </div>
            <div class="col-md-3 with-margin">
                <label>Last Name:</label>
                <input type="text" class="form-control" id="lastname_cco" placeholder="Enter Last Name" name="lastname_cco">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber">
            </div>
            <div class="col-md-3 with-margin">
                <label>Email Id:</label>
                <input type="email" class="form-control" id="newemail_cco" placeholder="Enter Email Id" name="newemail_cco">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Date of Birth:</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter Phone Number" name="dob">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Passport:</label>
                <input type="text" class="form-control" id="passport_no" placeholder="Enter Passport Number" name="passport_no">
            </div>
            
            <div class="col-md-3 with-margin">
                <label>Expiry Date:</label>
                <input type="date" class="form-control" id="expiry_date" placeholder="Enter Expiry Date" name="expiry_date">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                <label>Address Line 1:</label>
                <input type="text" class="form-control" id="addr1_cco" placeholder="Enter Address" name="addr1_cco">
            </div>
            <div class="col-md-3 with-margin">
                <label>Address Line 2:</label>
                <input type="text" class="form-control" id="addr2_cco" placeholder="Enter Address" name="addr2_cco">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 with-margin">
                 <?php 
                    echo form_label('State:', 'posstate');
                    echo form_dropdown('posstate',$usStateList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="posstate"');
                ?> 
            </div>
            <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('City:', 'poscity');
                     echo form_dropdown('poscity','--Select City--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="poscity"');
                ?>
            </div>

            <div class="col-md-2 with-margin">
                <label>Zip Code:</label>
                <input type="text" class="form-control" id="zipcode" placeholder="Enter zipcode" name="zipcode">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-md-2 with-margin">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-2 with-margin">
                <input type="reset" class="btn btn-primary" value="Cancel"></input>
            </div>
        </div>
    </form>
</div>