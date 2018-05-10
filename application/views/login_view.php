<?php
$username = array(
    'name' =>'username',
    'id' => 'username',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Username'
);

$password = array('name' => 'password' ,'id' => 'password',
    'required' => 'required',
    'class' => 'form-control',
    'placeholder' =>'Password',
    'type' => 'password'
 );
if(isset($isInsert)&& $isInsert){
    $message="<strong>User Registered Successfully!</strong>";
    $displayMessage=true;
    $displayAlertClass="alert-success";
}else if(isset($loginFailed)){
    $message="<strong>Login Failed! Incorrect Username/Password</strong>";
    $displayMessage=true;
    $displayAlertClass="alert-danger";
}else{
    $message="";
    $displayMessage=false;

}

?>


<body>
    <div class="container-fluid">
        <header id="headingBorder">
            <img src="<?php echo base_url();?>assets/images/logo.png" align="left">
            <h1>USA Travelers</h1>
        </header>
        <div class="content">
                    <h2 align="center" style="margin-top:90px">Login Page</h2>
                    <div style="margin-bottom: 120px">
                        <?php 
                            if($displayMessage){
                        ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <div class="alert <?php echo $displayAlertClass;?>  alert-dismissible">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 <?php echo $message;?>
                             </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        }
                                echo form_open(base_url().'login/performLogin','class="form-horizontal" role="form"');
                            ?>
                            <div class="form-group">
                                    <?php
                                        echo form_label('Username','username','class="col-sm-2 col-sm-offset-2 control-label"');
                                    ?>
                                <div class="col-sm-4">
                                    <?php
                                        echo form_input($username);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                    <?php
                                        echo form_label('Password','password','class="col-sm-2 col-sm-offset-2 control-label"');
                                    ?>
                                <div class="col-sm-4">
                                    <!-- <input type="password" class="form-control" id="password" name="password" placeholder="Password" /> -->
                                    <?php
                                        echo form_input($password);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-4">
                                    <?php
                                        echo form_submit('name','SignIn','class="btn btn-primary"');
                                    ?>
                                </div>
                                <div class="col-sm-3">
                                    <?php 
                                    $this->load->helper('url'); 
                                    echo anchor(base_url().'registration', 'Register'); 
                                    ?> /
                                    <?php 
                                    $this->load->helper('url'); 
                                    echo anchor(base_url().'resetpassword', 'Forgot Password'); 
                                    ?>
                                </div>
                            </div>
                            <?php
                                    echo form_close();
                           ?>
                    </div>
        </div>