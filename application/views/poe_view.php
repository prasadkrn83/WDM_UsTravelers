<?php

?>
<div class="content">
    <div id="contentHeader">
        <h2>USA Port Of Entry</h2>
    </div>
    <div id="poeformdiv">
            <div class="form-group">
                <div class="col-md-9 with-margin">
                    <?php

                        echo form_label('Select State:', 'entrystate');
                        echo form_dropdown('entrystate',$usStateList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entrystate"');
                
                   ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-9 with-margin">
                   <?php

                        echo form_label('Entry City:', 'entrycity');
                        echo form_dropdown('entrycity','--Select City--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entrycity"');
                
                   ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-9 with-margin">
                    <?php

                        echo form_label('Port of Entry:', 'poe');
                        echo form_dropdown('poe','--Select Port of Entry--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="poe"');
                
                   ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-md-3 with-margin">
                    <?php 
                        echo form_button('submitPoe', 'Search','class="btn btn-primary" id="submitPoe"');
                    ?>
                </div>
                <div class="col-md-3 with-margin">
                <?php 
                    echo form_reset ('cancelPoe', 'Cancel','class="btn btn-primary"');
                ?>
                </div>
            </div>
    </div>
    <div id="poediv">
        <div class="poesection">
            <span class="contactheadings">Location Address:</span>
            <br>
            <span class="contactcontent" id="locationAddress"></span></div>
        <div class="poesection">
            <span class="contactheadings">Mailing Address:</span>
            <br>
            <span class="contactcontent" id="mailingAddress"></span></div>
        <div class="poesection">
            <span class="contactheadings">Operational Hours:</span>
            <br>
            <span class="contactcontent" id="operationHours"></span></div>
        <div class="poesection">
            <span class="contactheadings">Phone:</span>
            <br>
            <span class="poecontent"><a href="#" id="poePhone"></a></span></div>
        <div class="poesection">
            <span class="contactheadings">Fax:</span>
            <br>
            <span class="poecontent"><a href="#" id="poeFax"></a></span></div>
        <div class="poesection">
            <span class="contactheadings">Email:</span>
            <br>
            <span class="contactcontent "><a href="#" id="poeEmail"></a></span></div>
    </div>
</div>