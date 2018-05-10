    var stateSet=false;
    var citySet=false;
    function on(divid) {
                    document.getElementById(divid).style.display = "block";
                    if(divid=='overlay'){

                      $('#regcountry')
                    .trigger('change');
                    setTimeout(setState(), 1000);

                    setTimeout(setCity(), 1000);

                    }
    }
    function setState(){
                  $('#regstate').val($('#hstateid').val());

                     $('#regstate')
                    .trigger('change');
    }
    function setCity(){

                    $('#regcity')
                    .val($('#hcityId').val())
                    .trigger('change');
    }

    function off(divid) {
                    document.getElementById(divid).style.display = "none";
    }
    $(document).ready(function() {

                   

                $('#regcountry').on('change', function() {
                  stateSet=false;
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllStates",
                                                    dataType: 'json',
                                                    data: { countryId: this.value },
                                                    success: function(res) {
                                                        $('#regstate').html(res);
                                                        stateSet=true;
                                                    }
                                    });
                    });

                $('#regstate').on('change', function() {
                  citySet=false;
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllCities",
                                                    dataType: 'json',
                                                    data: { stateId: this.value },
                                                    success: function(res) {
                                                        $('#regcity').html(res);
                                                        citySet=true;
                                                    }
                                    });
                    });


                    var travelhistorytb=$('#travelhistory').DataTable({
                                    searching: false,
                                    paging: false,
                                    bInfo: false,
                                    ordering: false
                    });

                    $('#depcountry').on('change', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllStates",
                                                    dataType: 'json',
                                                    data: { countryId: this.value },
                                                    success: function(res) {
                                                        $('#depstate').html(res);
                                                    }
                                    });
                    });

                    $('#depstate').on('change', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllCities",
                                                    dataType: 'json',
                                                    data: { stateId: this.value },
                                                    success: function(res) {
                                                        $('#depcity').html(res);
                                                    }
                                    });
                    });

                    $('#country').on('change', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllStates",
                                                    dataType: 'json',
                                                    data: { countryId: this.value },
                                                    success: function(res) {
                                                        $('#state').html(res);
                                                    }
                                    });
                    });

                    $('#state').on('change', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllCities",
                                                    dataType: 'json',
                                                    data: { stateId: this.value },
                                                    success: function(res) {
                                                        $('#city').html(res);
                                                    }
                                    });
                    });


                    $('#entrystate').on('change', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllCities",
                                                    dataType: 'json',
                                                    data: { stateId: this.value },
                                                    success: function(res) {
                                                        $('#entrycity').html(res);
                                                    }
                                    });
                    });
                    $('#entrycity').on('change', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllUSPOE",
                                                    dataType: 'json',
                                                    data: { cityId: this.value },
                                                    success: function(res) {
                                                        $('#poe').html(res);
                                                    }
                                    });
                    });

                    $('#posstate').on('change', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "helper/getAllCities",
                                                    dataType: 'json',
                                                    data: { stateId: this.value },
                                                    success: function(res) {
                                                        $('#poscity').html(res);
                                                    }
                                    });
                    });
                    $('#submitPoe').on('click', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "poe/getPOEDetails",
                                                    dataType: 'json',
                                                    data: { poeid: $('#poe').val() },
                                                    success: function(res) {
                                                        $("#locationAddress").text(res.locationAddress);
                                                        $("#mailingAddress").text(res.mailingAddress);
                                                        $("#operationHours").text(res.operatingHours);
                                                        $("#poePhone").text(res.phone);
                                                        $("#poeFax").text(res.fax);
                                                        $("#poeEmail").text(res.email);
                                                        $('#poediv').show();
                                                    }
                                    });
                    });
                    $("#searchUser").on('click',function(e) {

                            var url = "customssearchtraveler/searchTraveler"; // the script where you handle the form input.

                            $.ajax({
                                   type: "POST",
                                   url: url,
                                   data: { passport: $('#custompassport').val() },
                                   success: function(data)
                                   {
                                       if(data=="null"){
                                        alert('User not found');
                                       }
                                       var resp=jQuery.parseJSON(data);

                                       $('#username_cco').val(resp.userId);
                                       $('#firstname_cco').val(resp.fname);
                                       $('#middlename_cco').val(resp.mname);
                                       $('#lastname_cco').val(resp.lname);
                                       $('#phonenumber').val(resp.userId);
                                       $('#email').val(resp.emailId);
                                       $('#dob').val(resp.dob);
                                       $('#passport_no').val(resp.passport);
                                       $('#issuing_country').val(resp.issuingCountry);
                                       $('#customsexpdate_cco').val(resp.pexpdate);                            
                                       $('#customsadd1').val(resp.address1);
                                       $('#customsadd2').val(resp.address2);
                                       $('#city').val(resp.cityId);
                                       $('#state').val(resp.stateId);
                                       $('#country').val(resp.countryId);
                                       $('#viscat').val(resp.visatypeId);
                                       $('#customsvisa').val(resp.visaNumber);
                                       $('#visaexp').val(resp.visaExpDate);
                                       $('#customszipcode').val(resp.zipcode);

                                   }
                                 });

                            e.preventDefault(); // avoid to execute the actual submit of the form.
                        });
                    $("#adminsearchUser").on('click',function(e) {

                            var url = "adminhome/searchUser"; // the script where you handle the form input.

                            $.ajax({
                                   type: "POST",
                                   url: url,
                                   data: { passport: $('#adminpassport').val() },
                                   success: function(data)
                                   {
                                       if(data=="null"){
                                        alert('User not found');
                                       }
                                       var resp=jQuery.parseJSON(data);

                                       $('#username_cco').val(resp.userId);
                                       $('#firstname_cco').val(resp.fname);
                                       $('#middlename_cco').val(resp.mname);
                                       $('#lastname_cco').val(resp.lname);
                                       $('#phonenumber').val(resp.userId);
                                       $('#email').val(resp.emailId);
                                       $('#dob').val(resp.dob);
                                       $('#passport_no').val(resp.passport);
                                       $('#issuing_country').val(resp.issuingCountry);
                                       $('#adminexpiry_date').val(resp.pexpdate);                            
                                       $('#adminaddr1').val(resp.address1);
                                       $('#adminaddr2').val(resp.address2);
                                       $('#city').val(resp.cityId);
                                       $('#state').val(resp.stateId);
                                       $('#country').val(resp.countryId);
                                       $('#viscat').val(resp.visatypeId);
                                       $('#adminvisa').val(resp.visaNumber);
                                       $('#visaexp').val(resp.visaExpDate);
                                       $('#adminzipcode').val(resp.zipcode);
                                       $('#userid').val(resp.id);
                                   }
                                 });

                            e.preventDefault(); // avoid to execute the actual submit of the form.
                        });


        $("#deleteuser").on('click',function(e) {

                            var url = "adminhome/deleteUser"; // the script where you handle the form input.

                            $.ajax({
                                   type: "POST",
                                   url: url,
                                   data: { userid: $('#userid').val() },
                                   success: function(data)
                                   {
                                       alert(data);
                                       
                                   }
                                 });

                            e.preventDefault(); // avoid to execute the actual submit of the form.
                        });

                    $('#submitTravelReviewbtn').on('click', function() {
                                    jQuery.ajax({
                                                    type: "POST",
                                                    url: "updateTravelDetail",
                                                    dataType: 'json',
                                                    data: { id: $('#travelId').val(),
                                                             currstat: $('#currstat').val(),
                                                             comments: $('#Comments').val()+".&#10;"+$('#prevcommentss').val()},
                                                    success: function(res) {
                                                        off('overlay-details');
                                                        alert("Travel Details updated");

                                                    }
                                    });
                    });

       $("#assignSearchBtn").on('click',function(e) {

                            var url = "adminhome/searchUser"; // the script where you handle the form input.

                            $.ajax({
                                   type: "POST",
                                   url: url,
                                   data: { passport: $('#assignpassport').val() },
                                   success: function(data)
                                   {
                                       if(data=="null"){
                                        alert('User not found');
                                       }
                                       var resp=jQuery.parseJSON(data);

                                       $('#assignusername').val(resp.userId);
                                       $('#assignfirstname').val(resp.fname);
                                       $('#assignmiddlename').val(resp.mname);
                                       $('#assignlastname').val(resp.lname);
                                       
                                   }
                                 });

                            e.preventDefault(); // avoid to execute the actual submit of the form.
                        });
                    
                   
    });

    function loadTravelDetails(id){
                    var url = "getTravelDetail"; // the script where you handle the form input.
                  
                            $.ajax({
                                   type: "POST",
                                   url: url,
                                   data: { 'id': id },
                                   success: function(data)
                                   {
                                       //alert(data); // show response from the php script.
                                       var resp=jQuery.parseJSON(data);

                                       $('#tstartdate').val(resp.start_date);
                                       $('#tenddate').val(resp.end_date);
                                       $('#airlinenumber').val(resp.flight_number);
                                       $('#arrivaltime').val(resp.arrival_time);
                                       $('#depCountry').val(resp.departing_country);
                                       $('#depState').val(resp.departing_state);
                                       $('#depCity').val(resp.departing_city);
                                       $('#travelPoe').val(resp.poe_name);
                                       $('#posstate').val(resp.arrival_state);
                                       $('#poscity').val(resp.arrival_city);
                                       $('#poszipcode').val(resp.stateId);
                                       $('#prevcomments').val(resp.countryId);
                                       $('#poszipcode').val(resp.zipcode);
                                       $('#currstat').val(resp.status);
                                       $('#travelId').val(resp.id);

                                      on('overlay-details');

                                   }
                                 });

      
    }

    
    