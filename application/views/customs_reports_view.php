<?php 
$travelstartdate = array(
    'name' => 'travelstartdate',
    'id' => 'travelstartdate',
    'required'=>'required',
    'class'=>'form-control',
    'type' => 'date'
);

$travelenddate = array(
    'name' => 'travelenddate',
    'id' => 'travelenddate',
    'required'=>'required',
    'class'=>'form-control',
    'type' => 'date'
);
?>
<div class="content">
    <div id="contentHeader">
        <h2>Reports</h2>
    </div>
    <form class="col-xs-offset-1 form-horizontal" id="customsreports" action="customsreports/getReports" method="post">
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
                <label>Status:</label>
                <?php 
                    echo form_dropdown('currstat',$statusList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="currstat"'); 
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
                    echo form_label('Entry State:', 'entstate');
                    echo form_dropdown('entstate',$usStateList,'0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entstate"');
                ?>
            </div>
            <div class="col-md-3 with-margin">
                  <?php 
                    echo form_label('Entry City:', 'entrycity');
                    echo form_dropdown('entrycity','--Select City--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="entrycity"');
                ?>
            </div>
            
        </div>
        <div class="form-group">
                <div class="col-md-3 with-margin">
                <?php 
                    echo form_label('Port of Entry:', 'poe');
                     echo form_dropdown('poe','--Select Port Of Entry--','0','class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="poe"');
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-md-2 with-margin">
                &nbsp;
                <div style="margin-left:250px;">
                    <button type="search" class="btn btn-primary">Search</button>
                </div>
            </div>
            <div class="col-xs-offset-1 col-md-2 with-margin">
                &nbsp;
                <div style="margin-left:100px;">
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </div>
        </div>
        <div id="travelhistorydiv">
            <div id="travelhistory_wrapper" class="dataTables_wrapper no-footer">
                <table id="travelhistory" class="display dataTable no-footer" role="grid">
                    <thead>
                        <tr role="row">
                            <th>Sl No</th>
                            <th>Count</th>
                            <th>Departing Country</th>
                        </tr>
                    </thead>
                    <?php 
            if(isset($travelDetails)){
                    echo "<tbody>";
                
                echo "<tr>";

                    foreach ($travelDetails as $key1=>$data) {
                        echo "<tr>";

                        foreach ($data as $d) {
                                        echo "<td>".$d."</td>";
                    }
                echo "</tr>";
                }
            }

            echo "</tbody>";

        ?>
                </table>
            </div>
        </div>
    </form>
</div>