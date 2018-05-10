<?php
$user=$this->session->userdata('user');
$assignPassport = array(
  'name' =>'assignpassport',
  'id' => 'assignpassport',
  'required' => 'required',
  'class' => 'form-control',
  'placeholder' =>'Enter Passport Number'
);
$assignUsername = array(
  'name' =>'assignusername',
  'id' => 'assignusername',
  'required' => 'required',
  'class' => 'form-control',
  'readonly'=> "true"
);
$assignFirstname = array(
  'name' =>'assignfirstname',
  'id' => 'assignfirstname',
  'required' => 'required',
  'class' => 'form-control',
  'readonly'=> "true"
);
$assignMiddlename = array(
  'name' =>'assignmiddlename',
  'id' => 'assignmiddlename',
  'required' => 'required',
  'class' => 'form-control',
  'readonly'=> "true"
);
$assignLastname = array(
  'name' =>'assignlastname',
  'id' => 'assignlastname',
  'required' => 'required',
  'class' => 'form-control',
  'readonly'=> "true"
);
$hidden = array(
    'type'=>'hidden',
    'name' => 'assignid',
    'value'=> $user->getId(),
    'id' => 'assignid'
);
?>
<div class="content">
    <div id="contentHeader">
        <h2>Assign Officer to Port</h2>
    </div>
      <?php 
                            if(isset($isInsert) && $isInsert){
                        ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <div class="alert alert-success  alert-dismissible">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 Custom officer assigned to port of entry successfully!
                             </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        }
                        ?>
    <?php
      echo form_open('#','class="form-horizontal" id="Assign_officer_f1"');
      echo form_input($hidden);
    ?>
        <font size=5 color='#4472C4'>
            <p>&nbsp&nbsp&nbsp<u>Step 1: Search Custom Officer</u></p>
        </font>
        <div class="form-group" style="margin-left: 15%">
            <div class="col-md-3 with-margin">
                <!-- <label>Passport:</label>
                <input type="text" class="form-control" id="passport" placeholder="Enter Passport Number" name="passport"> -->
                <?php
                        echo form_label('Passport:','assignPassport');
                        echo form_input($assignPassport);
                ?>
            </div>
            <div class="col-xs-offset-1 col-md-2 with-margin">
                <div style="margin-bottom: 3px;">&nbsp;</div>
                <!-- <button type="submit" class="btn btn-primary">Search</button> -->
                <?php
                         echo form_button('name','Search','class="btn btn-primary" id="assignSearchBtn"');
                ?>
            </div>
        </div>
    </form>
    <table>
        <tr>
            <td>
                <div class='form-group'>
                    <div class="col-md-4 with-margin">
                        <!-- <label>User Name:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" readonly="true"> -->
                        <?php
                              echo form_label('User Name:','assignUsername');
                              echo form_input($assignUsername);
                        ?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class='form-group'>
                    <div class="col-md-4 with-margin">
                        <!-- <label>First Name:</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" readonly="true"> -->
                        <?php
                              echo form_label('First Name:','assignFirstname');
                              echo form_input($assignFirstname);
                        ?>
                    </div>
                    <div class="col-md-4 with-margin">
                        <!-- <label>Middle Name:</label>
                        <input type="text" class="form-control" id="middlename" placeholder="Enter Middle Name" name="middlename" readonly="true"> -->
                        <?php
                              echo form_label('Middle Name:','assignMiddlename');
                              echo form_input($assignMiddlename);
                        ?>
                    </div>
                    <div class="col-md-4 with-margin">
                        <!-- <label>Last Name:</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" readonly="true"> -->
                        <?php
                              echo form_label('Last Name:','assignLastname');
                              echo form_input($assignLastname);
                        ?>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <?php
      echo form_open(base_url().'adminassignofficer/assignofficer','class="form-horizontal" id="Assign_officer_f2"');
      echo form_input($hidden);
    ?>
        <font size=5 color='#4472C4'>
            <p>&nbsp&nbsp&nbsp<u>Step 2: Assign to Port</u></p>
        </font>
        <div class="form-group" style="margin-left: 15%">
            <div class="col-md-3 with-margin">
                <!-- <label>State:</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="state" name="state">
                    <option selected>Select State</option>
                </select> -->
                <?php
                    echo form_label('State:', 'entstate');
                    echo form_dropdown('entstate',$usStateList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entrystate"');
                ?>
            </div>
        </div>
        <div class="form-group" style="margin-left: 15%">
            <div class="col-md-3 with-margin">
                <!-- <label>City:</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="city" name="city">
                    <option selected>Select City</option>
                </select> -->
                <?php
                    echo form_label('City:', 'entrycity');
                    echo form_dropdown('city','--Select City--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entrycity"');
               ?>
            </div>
        </div>
        <div class="form-group" style="margin-left: 15%">
            <div class="col-md-3 with-margin">
                <!-- <label>Port Name:</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="port_name" name="port_name">
                    <option selected>Select Port Name</option>
                </select> -->
                <?php
                    echo form_label('Port Name:', 'poe');
                    echo form_dropdown('poe','--Select Port of Entry--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="poe"');
               ?>
            </div>
        </div>
        <div class="form-group">
            <div style="margin-left: 22%;">
                <!-- <button type="submit" class="btn btn-primary">Assign</button> -->
                <?php
                    echo form_submit('name','Assign','class="btn btn-primary"');
                ?>
            </div>
        </div>
    </form>
</div>
