
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <title>Login using Swedish BankID</title>
  <link rel="icon" type="image/x-icon" href="./images/logo.png" />
  <style>
    

  
  .form-control{
    font-size: 1.25rem;
  }
  .border-primary {
    border-color: #0d6efd!important;
}
    #pnum {

      width: 41%;
    margin-bottom: 48px;
    height: 52px;
    }

    #bnk-btn {
      
    margin-top: -1px;

    }
   .btn{
     font-size:1.25rem;
   }

  </style>
</head>

<body>
 
  
  <?php
      include('navbar1.html');
      include('header1.php');
  ?>
 
      <div class="container" id="container">
        <!-- <div class="grid">
        
          <div > -->
           
                <center class="mdiv">
                  <div >
                   
                  <input type="text" id='pnum' class="form-control text-center" style="border-color:#0d6efd;border-width:3px;" id="floatingInput" placeholder=" Please enter Personal Identity number" name="pnum" >
                  <label for="floatingInput" style="display: none;" >Please enter Personal Identification umber</label>
                  
                </div>
                <div id='bank-err' style="margin-bottom:18px;margin-top:-40px;"><p style="visibility: hidden;">hello error</p></div>
               <div class="btn btn-primary" id='bnk-btn' id="validate" style="width: 41%;height: 43px;"  onclick="changeMargin();">
               
               <p style="display:inline;"><i class="fa fa-sign-in" style="font-size:20px;"></i>&nbsp;&nbsp;&nbsp;Login using Mobile Bank ID</p>
               <!-- <input class="btn "   type="submit"  style="color:white;" value="Login using Mobile Bank ID"  >           -->
               </div>
               <!--<button style="width: 37%;" id="validate" 
            class="btn-block mt-0 mb-2 btn btn-primary btn-lg shadow-none" id='bnk-btn' type="submit" style="margin-top:5px;"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;&nbsp;Login using Mobile Bank ID
          </button>-->
          
          
              </center>
            
            
          <!-- </div>   -->
       
      </div>
</body>

</html>






<script>
 function changeMargin(){
  document.getElementById("pnum").style.margin.bottom="none";
        document.getElementById("bank-err").style.margin.top="-16px";
        // alert("hello");
    }
  $("#bnk-btn").on('click', function () {// console.log(test);  $('#bank-err').html(test);
    var pin = $("#pnum").val();// console.log(pin);
    

    if(pin==''){
      $('#bank-err').html("<center>Personal Identity Number (personnummer) can not be blank.</center> ").css('color','red');return;
     }
    else if( isNaN(pin) == true ){
      $('#bank-err').html('<center>Please enter a valid person identity number ( personnummer )!</center>').css('color','red');
    }
   else if( pin.length != 10 && pin.length != 12  ){
      $('#bank-err').html('<center>Please enter a valid person identity number ( personnummer )!</center>').css('color','red');
    }
    else  { 
      $('#bnk-btn').attr('disabled', true);
      $('#spin').css('display','inline');
      $('#pnum').attr('disabled', true); 

       $.ajax({
         type: "POST",
         url: "/employee/Nitish/SwedishBankID/apicall.php",
         data: {
           pnum: pin
         },
         success: function (response) {

           var jsonData = JSON.parse(response);//console.log(jsonData);
           if (jsonData.status == "1") {
             $('#bank-err').html("Please check your mobile app to verify your login request!").css('color','#e66315');
           var interval  = setInterval( function(){
               $.ajax({
                  type: 'POST',
                  url : '/employee/Nitish/SwedishBankID/auth.php',
                  data : { orderRef : jsonData.orderRef
                 },
                success: function( data ){
             if(data.trim() == 'success'){
                   $('#bnk-btn').attr('disabled', false);
                   $('#pnum').attr('disabled', false); 
                   $('#bank-err').html("success authorized");
                   $('#spin').css('display','none');
                    clearInterval(interval);
                     $('#bank-err').html('verified').css('color','green');
                   // window.location.href="/";
                  }
                  else if( data.trim() == 'expire' ){
                    $('#bnk-btn').attr('disabled',false);
                    $('#pnum').attr('disabled', false); 
                    $('#bank-err').html('The login request has timed out. Please try again!').css('color','red');
                    $('#spin').css('display','none');
                    clearInterval(interval);
                  }
                 else if(data.trim() == 'cancel' ){
                    $('#bnk-btn').attr('disabled',false);
                    $('#pnum').attr('disabled', false); 
                    $('#bank-err').html('The login request was canceled on mobile app .').css('color','red');
                    $('#spin').css('display','none');
                    clearInterval(interval);
                  }

                 }
               })

             }, 2000);

            }else if(jsonData.status=="2"){
              $('#bank-err').html("Another login using bank ID is already in progress.Please wait for the previous login attempt to either complete or cancel.").css('color','red');
            }
           else if(jsonData.status == "5"  ) {
              $('#bank-err').html("Some Error.").css('color','red');
           }
           else if(jsonData.status =="6"){
              $('#bank-err').html("Please enter a valid person identity number ( personnummer )").css('color','red');
           }
          else if( jsonData.status == "8"){
             $('#bank-err').html('doesnotexist').css('color','red');
          }

          else{
              $('#bank-err').html("Some error");
           }
         }

        })
      }
    })


  






</script>
