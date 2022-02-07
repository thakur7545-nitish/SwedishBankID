<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- <link rel="stylesheet" href="new_styles.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <title>Swedish BankID Validation</title>
   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <link rel="icon" type="image/x-icon" href="./images/logo.png" />
  <style>
    a:hover{
        text-decoration: none;
    }
    .form {

        width: 40%;border: 1px solid lightgrey;
       padding: 15px;
       box-shadow: 4px 6px 8px 1px rgb(204,228,249,1);
        position: absolute;
        left: 30%;
        top: 280px;
    }

   
    .row 
    {
        display:flex; 
        flex-direction: row;
         justify-content: center; 
         align-items: center;
         padding:10px 0 10px 0;

         position: relative;
         /* right: 40px; */
         /* right: 15px; */
    }
    
    #btn_line{
        border-top:2px solid lightgrey ;
        padding:0px 0 5px 0;
        /* margin-left: 40px; */
        /* margin: 0 -4em 0 1.7em; */
        /* margin:0px -30px 0px 0px; */
        /* display:inherit;  */
        /* width: 40px;
        position: absolute;
        left: 30%; */
        
    }
    #cou{
        padding:10px 0 25px 0;
    }

    .toggle>.toggle-group>.toggle-off{
        background-color:pink;
    }
.toggle{
   float: left;
}
.toggle-off .btn{
    padding-left: 8px;
    padding-top: 8px;
}
    .toggle.btn {
     min-width: 90px;

    }
   #pin{
    padding:5px 0 15px 0;
    /* border: 3px solid lightgrey; */
   }
   #pin_no{
    display:inherit; 
        flex-direction: row;
         /* justify-content: center;  */
         align-items: center;
        /* color:rgb(79, 143, 180);  */
        font-size: 20px;  
        /* padding:-1px 0 10px 250px; */

        /* position: relative; */
    
    padding: 15px;

    width: 40%;
    /* padding-left:100px; */

    position: absolute;
    left: 30%;

   }
   .pin{
    padding:10px 10px 10px 250px;
   }
   #pin1{
       /* color:rgb(79, 143, 180); */
       /* font-size: 20px; */
       /* padding: 15px;  */
      
   }
   .roww 
    {
        display:flex; 
        flex-direction: row;
         justify-content: center; 
         align-items: center;
         padding:10px 0 10px 0;
         position: relative;
         /* right: 40px; */
         right: 15px;
        
        /* border: 3px solid lightgrey; */
        
        
    }
    /* #dob{
        text-color:
    } */
   
    .label-primary {
   background-color: #578bffe0;
    /* text-align: center; */}

    #btnmain{

        padding:20px 0 10px 0;
        /* margin-left: 25px; */
        /* animation: ripple 1s; */
        /* margin: 0 7.5em 0 9.8em; */
        margin: 0 8.5em 0 8.5em;

    }
    
  
.navbar-nav>li>a{
    padding: 8px;
    font-size: 16px;
}

.toggle-on.btn {
    padding-right: 10px;
    padding-top: 5px;
    margin:2%;
}
.toggle-off.btn {
  padding-left: 11px;
    padding-top: 5px;
}
.toggle-group{
  border-radius:3px;
}

    </style>
</head>

<body>
  <?php
  include('navbar3.html');
  include('header3.php');
?>
  <center>
  
    <div class="label label-primary bg-primary" id="pin_no" style="margin-bottom:2px; border-radius:7px;color:white; ">
      <label for="date" style="">Personal Identity Number   </label><label> <b id="pin1" style="margin-left:12px;">xxxxxxxx-xxxx</b></label>
    </div>

  <div class="container">


<!-- try pin -->
<!-- <div class="roww" id="pin">  -->

<!-- <div >
  <label for="date" id="pin_no" class="label label-primary">Personal Identity Number <b id="pin1" style="margin-left:30px;">xxxxxxxx-xxxx</b> </label>
</div> -->





<!-- <div class="col-md-3">
            <b class="label label-primary" id="pin1"></b>
</div> -->

<!-- </div> -->
<!-- try pin -->

<form action="/action_page.php" class="form">
<div class="row">
    <div class="col-md-3 offset-md-3" style="margin-left:-51px;">
  <label for="date" id="dob" style="color:rgb(29, 94, 235); float: right;">Date Of Birth</label></div>
  <div class="col-md-3">
  <input style="width:170px;"  type="date" class="form-control" id="date" placeholder="Date" name="date">
</div>
</div>
<div class="row" >
    <div class="col-md-3 offset-md-3" style="margin-left:-51px;">
  <label for="my_gender" style="color:rgb(29, 94, 235);  float: right;">Gender  </label></div>
  <div class="col-md-3 gender">
  <input type="checkbox" style="float:left;" id="gen" data-toggle="toggle" data-on="Male" data-off="Female"></div>
</div>
<div class="row">
<div class="col-md-3 offset-md-3" style="margin-left:-51px;">
  <label for="imm" style="color:rgb(29, 94, 235); float: right;">Immigrant  </label></div>
  <!-- <label>Yes <input type="radio" name="yes"></label>
  <label> No <input type="radio" name="no" checked></label> -->
  <div class="col-md-3">
  <input type="checkbox" style="margin-left: -20px;" class="test" id="immi"  data-toggle="toggle" data-on="Yes" data-off="No"></div>
</div>

<div class="row" >
        <div class="col-md-3 offset-md-3" style="margin-left:-51px;">
            <label for="date" style="color:rgb(29, 94, 235); float: right;">County</label></div>
                <div class="col-md-3">
                    <select style="width:170px;"  name="coun" id="country"  class="form-control"  >
                        <option value="Select" >Select</option>
                        <option value="01" > Stockholm</option>
                        <option value="24" > Vasterbotten</option>
                        <option value="25" > Norrbotten</option>
                        <option value="03" > Uppsala</option>
                        <option value="04" > Södermanland</option>
                        <option value="05" > Östergötland</option>
                        <option value="06" > Jönköping</option>
                        <option value="07" > Kronoberg</option>
                        <option value="08" > Kalmar</option>
                        <option value="09" > Gotland</option>
                        <option value="10" > Blekinge</option>
                        <option value="12" > Skåne</option>
                        <option value="13" > Halland</option>
                        <option value="14" > Västra Gotaland</option>
                        <option value="17" > Värmland</option>
                        <option value="20" > Dalarnas</option>
                        <option value="21" > Gaveleborg</option>
                        <option value="23" > Jamtland</option>
                        <option value="22" > Vastermorrland</option>
                        <option value="19" > Vastmanland</option>
                        <option value="18" > Orebro</option>
                    
                     </select>
                </div>
        </div>

    <div class="row" id="btn_line">
    </div>
            <div class="row " id="btnmain">
                <!-- <div class="col-md-4 offset-md-4"> -->
                <div class="row mx-auto justify-content-md-center "
        style="position:relative; top:0em; left:0em; width: fit-content; ">
                        <button style="width: 30em;" id="pidSubmit" type="button"
            class="btn-block mt-0 mb-2 btn btn-primary btn-lg shadow-none" onclick="getInputValue(); "><i class="fa fa-random"></i>&nbsp;Generate Personal Identity Number</button>
                </div> 
            </div>
</form>
</div>



  <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Swedish Personal Identity Number (Bank ID) Generation</h4>
        </div>
        <div class="modal-body">
          <p>The date of birth should not be a future date.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</center>

<script>
    var flag =0;

        function getInputValue() { 
         var date = document.getElementById("date").value;
            var date1 = new Date(date);
            var year = date1.getFullYear();
            var day = date1.getDate();
            var month = date1.getMonth() +1;
            var gen = getGender();
            var count=0;
            // var r,q=0;
            var checkk="";
            console.log("gen", gen);

            var pinl="";


            // var random_array=[7,9];
            // var random_item=random_array[Math.floor(Math.random()*random_array.length)];
            var pin=((((year*100)+month)*100)+day);
            console.log("pin",pin);


           if(date=="" || date==null)
           {
               $("#date").css("border", "1px solid red");
               if((pinl)=="" || (pinl)==null){

                }else{
                     $("#pin1").text(pinl);   //added
                    }
               
           }
           else
           {
                $("#date").css("border", "1px solid lightgrey");

                var TodayDate = new Date();
                var endDate= new Date(Date.parse($("#date").val()));

                if (endDate> TodayDate) 
                {
                    $("#myModal").modal();
                }
                else
                {
                    if(immi.checked==true )
                        {
                            var pin2=pin+'90'+gen;
                            console.log("pin2",pin2);

                            checkk=checking(pin2);
                           

                            // let myFunc = num => Number(num);
  
                            //     var intArr = Array.from(String(pin2), myFunc);
                            //     console.log(intArr);
                                
                            // for(var i=2;i<11;i++)
                            // {
                            //     if(i%2==0)
                            //     {intArr[i]=intArr[i]*2;
                                   
                            //     }
                                
                            // }
                            // console.log(intArr);

                            // for(var j=0;j<11;j++)
                            // {
                            //     if(intArr[j]>9)
                            //     {
                            //         r=intArr[j]%10;
                            //         q=intArr[j]/10;
                            //         var d=Math.floor(r+q);
                            //         intArr[j]=d;
                            //     }
                            // }
                            // console.log(intArr);

                            // for(var k=0;k<11;k++)
                            // {
                            //     count=count+intArr[k];
                            // }
                            // console.log(count);

                            

                            // var checksum=10- (count %10);
                            // console.log("check",checksum);
                           

                            pinl=pin2*10+checkk; 

                            npa = String(pinl).substr(0, 8);
                            npa1 = String(pinl).substr(8, 12);

                            pinl = npa+"-"+npa1;
                            
                            console.log("pintet", pinl);
                            
                            // let myFunct = num9 => Number(num9);
  
                            //  var intArray = Array.from(String(pin1), myFunct);

                            //  for(int k=11;k>=0;k--)
                            //  {
                                
                            //  }

                            console.log("pin1",pin1);   
                        }   
                        else {
                                  //var checksum=10-(count %10);


                            var country_id=document.getElementById("country").value;
                            var pin3=(pin)+country_id+gen;
                            console.log("pin3",pin3);

                            checkk=checking(pin3);
                       

                            //  let myFunc = num => Number(num);
  
                            //     var intArr = Array.from(String(pin3), myFunc);
                            //     console.log("intArr",intArr[10]);
                                

                        pinl=pin3*10+checkk;

                        npa = String(pinl).substr(0, 8);
                        npa1 = String(pinl).substr(8, 12);
                        pinl = npa+"-"+npa1;

                        console.log("pin008",pinl);
                        
                        }

                }

               
             }
            


           if(flag==0){
            var country = $("#country").val();
            
            if(country=="Select"){
                $("#country").css("border", "1px solid red");
            }else{
                $("#country").css("border", "1px solid lightgrey");

                // $("#pin1").text(pinl);
                if((pinl)=="" || (pinl)==null){

        }else{
     $("#pin1").text(pinl);   //added
     }

            }

           }else{
            $("#country").css("border", "1px solid lightgrey");
            // $("#pin1").text(pinl);
            if((pinl)=="" || (pinl)==null){

            }else{
                $("#pin1").text(pinl);   //added
            }


           }
           

          
        
     }
        $("#immi").change(function(){
            
            if($(this).parent("div").hasClass("off")){
                $("#country").attr("disabled", false);
                flag=0;
            }else{
                $("#country").attr("disabled", true);
                flag=1;
            }

        });

        clicked = true;
    $(document).ready(function(){
        $("button").click(function(){
            if(clicked){
                $(this).css('background-color', '#3556d0');
                clicked  = false;
            } else {
                // $(this).css('background-color', 'blue');
                // clicked  = true;
            }   
        });
    });

        function checking(pinx){
            var count=0;
            var r,q=0;
            var first,second=0;
            // var pin2=pin;
            // var pin3=pin;
            let myFunc = num => Number(num);
  
                                var intArr = Array.from(String(pinx), myFunc);
                                console.log(intArr);
                                
                            for(var i=2;i<11;i++)
                            {
                                if(i%2==0)
                                {intArr[i]=intArr[i]*2;
                                   
                                }
                                
                            }
                            console.log(intArr);

                            for(var j=0;j<11;j++)
                            {
                                if(intArr[j]>9)
                                {
                                    r=intArr[j]%10;
                                    q=intArr[j]/10;
                                    var d=Math.floor(r+q);
                                    intArr[j]=d;
                                }
                            }
                            console.log(intArr);

                            for(var k=2;k<11;k++)
                            {
                                count=count+intArr[k];
                            }
                            console.log("count",count);

                            

                            var checksum=10- (count %10);
                            console.log("checksum",checksum);

                            if (checksum>9)
                            {
                                     first=checksum%10;
                                     second=checksum/10;
                                    var neww=Math.floor(first+second);
                                    checksum=neww;
                                    return checksum;
                            }
                            return checksum;
        }



        function getGender(){
            var oe="";
           

            if($("#gen").is(':checked')) {
               
            
            for(var i=0;i<100;i++){
                var randomItem = 1 + Math.floor(Math.random() * 9);
                
                if(randomItem%2==1){
                    oe= randomItem;
                    return oe;
                    break;
                }
            }
               
            }
            
            else{
               
              
                for(var i=0;i<100;i++){
                    var randomItem = 1 + Math.floor(Math.random() * 9);
                    
                if(randomItem%2==0){
                    oe= randomItem;
                    return oe;
                    break;
                }
            }
               
               
            }

        }
             
    </script>
    
  <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <script src="new_js.js"></script>

</body>

</html>
<!-- new code for code generate -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Swedish BankID Generation</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  
  

  <!-- <link rel="stylesheet" href="new_styles.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

    <!-- <script src="js/rippleria/jquery.rippleria.min.js"></script> -->
    <!-- <script src="nsept-rippleria-5e87f16/js/jquery.rippleria.js"></script> -->

</head>
<style>
    a:hover{
        text-decoration: none;
    }
    nav{
        magin:-2.85px!important;
        padding-top:-2px;
        padding-right:8px;
    }
    .form {

        width: 40%;border: 1px solid lightgrey;
       padding: 15px;
       box-shadow: 4px 6px 8px 1px rgb(204,228,249,1);
        position: absolute;
        left: 30%;
        top: 247px;
    }

   
    .row 
    {
        display:flex; 
        flex-direction: row;
         justify-content: center; 
         align-items: center;
         padding:10px 0 10px 0;

         position: relative;
         /* right: 40px; */
         /* right: 15px; */
    }
    
    #btn_line{
        border-top:2px solid lightgrey ;
        padding:0px 0 5px 0;
        /* margin-left: 40px; */
        /* margin: 0 -4em 0 1.7em; */
        /* margin:0px -30px 0px 0px; */
        /* display:inherit;  */
        /* width: 40px;
        position: absolute;
        left: 30%; */
        
    }
    #cou{
        padding:10px 0 25px 0;
    }

    .gender>.toggle>.toggle-group>.toggle-off{
        background-color:pink;
    }

    .toggle.btn {
     min-width: 90px;

    }
   #pin{
    padding:5px 0 15px 0;
    /* border: 3px solid lightgrey; */
   }
   #pin_no{
    display:inherit; 
        flex-direction: row;
         /* justify-content: center;  */
         align-items: center;
        /* color:rgb(79, 143, 180);  */
        font-size: 20px;  
        /* padding:-1px 0 10px 250px; */

        /* position: relative; */
    
    padding: 15px;

    width: 40%;
    /* padding-left:100px; */

    position: absolute;
    left: 30%;

   }
   #date{
       float:left;
   }
   
   .pin{
    padding:10px 10px 10px 250px;
   }
   #pin1{
       /* color:rgb(79, 143, 180); */
       /* font-size: 20px; */
       /* padding: 15px;  */
      
   }
   .roww 
    {
        display:flex; 
        flex-direction: row;
         justify-content: center; 
         align-items: center;
         padding:10px 0 10px 0;
         position: relative;
         /* right: 40px; */
         right: 15px;
        
        /* border: 3px solid lightgrey; */
        
        
    }
    /* #dob{
        text-color:
    } */
   
    .label-primary {
   background-color: #578bffe0;
    /* text-align: center; */}

    #btnmain{

        padding:20px 0 10px 0;
        /* margin-left: 25px; */
        /* animation: ripple 1s; */
        /* margin: 0 7.5em 0 9.8em; */
        margin: 0 8.5em 0 8.5em;

    }
    .btn-primary{
       background-color:#5588fa;
       /* animation: ripple 1s; */
    }
    button:active{
  background-color:green;
}
.navbar-nav>li>a{
    
    font-size: 16px;
}
.navbar{
    margin-bottom:0px;
}
.toggle-off.btn {
    padding-left: 8px;
    padding-top: 8px;
}
.toggle{
    float:left;
}


.toggle-on.btn {
    padding-right: 10px;
    padding-top: 7px;
}
    
   

    </style>
<body>

    <?php
    include('navbar3.html');
    include('header3.php');
?>


<center>
<div class="container">


    <!-- try pin -->
    <!-- <div class="roww" id="pin">  -->
   
    <!-- <div >
      <label for="date" id="pin_no" class="label label-primary">Personal Identity Number <b id="pin1" style="margin-left:30px;">xxxxxxxx-xxxx</b> </label>
    </div> -->

    
    <div class="label label-primary bg-primary" id="pin_no" style="margin-top:2px;">
      <label for="date" >Personal Identity Number</label><label> <b id="pin1" style="margin-left:30px;">xxxxxxxx-xxxx</b></label>
    </div>



    <!-- <div class="col-md-3">
                <b class="label label-primary" id="pin1"></b>
    </div> -->

    <!-- </div> -->
    <!-- try pin -->

  <form action="/action_page.php" class="form">
    <div class="row">
        <div class="col-md-3 offset-md-3" style="margin-left:-51px;">
      <label for="date" id="dob" style="color:rgb(29, 94, 235); float: right;">Date Of Birth</label></div>
      <div class="col-md-3">
      <input style="width:160px;"  type="date" class="form-control" id="date" placeholder="Date" name="date">
</div>
    </div>
    <div class="row" >
        <div class="col-md-3 offset-md-3" style="margin-left:-51px;">
      <label for="my_gender" style="color:rgb(29, 94, 235);  float: right;">Gender  </label></div>
      <div class="col-md-3 gender">
      <input type="checkbox" id="gen" data-toggle="toggle" data-on="Male" data-off="Female"></div>
    </div>
    <div class="row">
    <div class="col-md-3 offset-md-3" style="margin-left:-51px;">
      <label for="imm" style="color:rgb(29, 94, 235); float: right;">Immigrant  </label></div>
      <!-- <label>Yes <input type="radio" name="yes"></label>
      <label> No <input type="radio" name="no" checked></label> -->
      <div class="col-md-3">
      <input type="checkbox" id="immi"  data-toggle="toggle" data-on="Yes" data-off="No"></div>
    </div>

    <div class="row" >
            <div class="col-md-3 offset-md-3" style="margin-left:-51px;">
                <label for="date" style="color:rgb(29, 94, 235); float: right;">County</label></div>
                    <div class="col-md-3">
                        <select style="width:160px;" id="date" name="coun" id="country"  class="form-control"  >
                            <option value="Select" >Select</option>
                            <option value="01" > Stockholm</option>
                            <option value="24" > Vasterbotten</option>
                            <option value="25" > Norrbotten</option>
                            <option value="03" > Uppsala</option>
                            <option value="04" > Södermanland</option>
                            <option value="05" > Östergötland</option>
                            <option value="06" > Jönköping</option>
                            <option value="07" > Kronoberg</option>
                            <option value="08" > Kalmar</option>
                            <option value="09" > Gotland</option>
                            <option value="10" > Blekinge</option>
                            <option value="12" > Skåne</option>
                            <option value="13" > Halland</option>
                            <option value="14" > Västra Gotaland</option>
                            <option value="17" > Värmland</option>
                            <option value="20" > Dalarnas</option>
                            <option value="21" > Gaveleborg</option>
                            <option value="23" > Jamtland</option>
                            <option value="22" > Vastermorrland</option>
                            <option value="19" > Vastmanland</option>
                            <option value="18" > Orebro</option>
                        
                         </select>
                    </div>
            </div>

        <div class="row" id="btn_line">
        </div>
                <div class="row " id="btnmain">
                    <!-- <div class="col-md-4 offset-md-4"> -->
                    <button style="width: 24em;" id="validate" type="button"
            class="btn-block mt-0 mb-2 btn btn-primary btn-lg shadow-none bg-primary"  style="width: -webkit-fill-available;" style="margin-top:5px;" onclick="getInputValue(); "><i class="fa fa-random"></i>&nbsp;&nbsp;&nbsp;Generate Personal Identity Number
          </button>
                            <!--<button type="button" class="btn btn-primary bg-primary" style="width: -webkit-fill-available;" onclick="getInputValue(); "><i class="fa  fa-sign-in"></i>&nbsp;Generate Personal Identity Number</button> -->
                    <!-- </div> -->
                </div>
    </form>
</div>


 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Swedish Personal Identity Number (Bank ID) Generation</h4>
        </div>
        <div class="modal-body">
          <p>The date of birth should not be a future date.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</center>
<script>
    var flag =0;

        function getInputValue() { 
         var date = document.getElementById("date").value;
            var date1 = new Date(date);
            var year = date1.getFullYear();
            var day = date1.getDate();
            var month = date1.getMonth() +1;
            var gen = getGender();
            var count=0;
            // var r,q=0;
            var checkk="";
            // console.log("gen", gen);

            var pinl="";


            // var random_array=[7,9];
            // var random_item=random_array[Math.floor(Math.random()*random_array.length)];
            var pin=((((year*100)+month)*100)+day);
            // console.log("pin",pin);


           if(date=="" || date==null)
           {
               $("#date").css("border", "1px solid red");
               if((pinl)=="" || (pinl)==null){

                }else{
                     $("#pin1").text(pinl);   //added
                    }
               
           }
           else
           {
                $("#date").css("border", "1px solid lightgrey");

                var TodayDate = new Date();
                var endDate= new Date(Date.parse($("#date").val()));

                if (endDate> TodayDate) 
                {
                    $("#myModal").modal();
                }
                else
                {
                    if(immi.checked==true )
                        {
                            var pin2=pin+'90'+gen;
                            // console.log("pin2",pin2);

                            checkk=checking(pin2);
                           

                            // let myFunc = num => Number(num);
  
                            //     var intArr = Array.from(String(pin2), myFunc);
                            //     console.log(intArr);
                                
                            // for(var i=2;i<11;i++)
                            // {
                            //     if(i%2==0)
                            //     {intArr[i]=intArr[i]*2;
                                   
                            //     }
                                
                            // }
                            // console.log(intArr);

                            // for(var j=0;j<11;j++)
                            // {
                            //     if(intArr[j]>9)
                            //     {
                            //         r=intArr[j]%10;
                            //         q=intArr[j]/10;
                            //         var d=Math.floor(r+q);
                            //         intArr[j]=d;
                            //     }
                            // }
                            // console.log(intArr);

                            // for(var k=0;k<11;k++)
                            // {
                            //     count=count+intArr[k];
                            // }
                            // console.log(count);

                            

                            // var checksum=10- (count %10);
                            // console.log("check",checksum);
                           

                            pinl=pin2*10+checkk; 

                            npa = String(pinl).substr(0, 8);
                            npa1 = String(pinl).substr(8, 12);

                            pinl = npa+"-"+npa1;
                            
                            // console.log("pintet", pinl);
                            
                            // let myFunct = num9 => Number(num9);
  
                            //  var intArray = Array.from(String(pin1), myFunct);

                            //  for(int k=11;k>=0;k--)
                            //  {
                                
                            //  }

                            // console.log("pin1",pin1);   
                        }   
                        else {
                                  //var checksum=10-(count %10);


                            var country_id=document.getElementById("country").value;
                            var pin3=(pin)+country_id+gen;
                            // console.log("pin3",pin3);

                            checkk=checking(pin3);
                       

                            //  let myFunc = num => Number(num);
  
                            //     var intArr = Array.from(String(pin3), myFunc);
                            //     console.log("intArr",intArr[10]);
                                

                        pinl=pin3*10+checkk;

                        npa = String(pinl).substr(0, 8);
                        npa1 = String(pinl).substr(8, 12);
                        pinl = npa+"-"+npa1;

                        // console.log("pin008",pinl);
                        
                        }

                }

               
             }
            


           if(flag==0){
            var country = $("#country").val();
            
            if(country=="Select"){
                $("#country").css("border", "1px solid red");
            }else{
                $("#country").css("border", "1px solid lightgrey");

                // $("#pin1").text(pinl);
                if((pinl)=="" || (pinl)==null){

        }else{
     $("#pin1").text(pinl);   //added
     }

            }

           }else{
            $("#country").css("border", "1px solid lightgrey");
            // $("#pin1").text(pinl);
            if((pinl)=="" || (pinl)==null){

            }else{
                $("#pin1").text(pinl);   //added
            }


           }
           

          
        
     }
        $("#immi").change(function(){
            
            if($(this).parent("div").hasClass("off")){
                $("#country").attr("disabled", false);
                flag=0;
            }else{
                $("#country").attr("disabled", true);
                flag=1;
            }

        });

        clicked = true;
    $(document).ready(function(){
        $("button").click(function(){
            if(clicked){
                $(this).css('background-color', '#3556d0');
                clicked  = false;
            } else {
                // $(this).css('background-color', 'blue');
                // clicked  = true;
            }   
        });
    });

        function checking(pinx){
            var count=0;
            var r,q=0;
            var first,second=0;
            // var pin2=pin;
            // var pin3=pin;
            let myFunc = num => Number(num);
  
                                var intArr = Array.from(String(pinx), myFunc);
                                // console.log(intArr);
                                
                            for(var i=2;i<11;i++)
                            {
                                if(i%2==0)
                                {intArr[i]=intArr[i]*2;
                                   
                                }
                                
                            }
                            // console.log(intArr);

                            for(var j=0;j<11;j++)
                            {
                                if(intArr[j]>9)
                                {
                                    r=intArr[j]%10;
                                    q=intArr[j]/10;
                                    var d=Math.floor(r+q);
                                    intArr[j]=d;
                                }
                            }
                            // console.log(intArr);

                            for(var k=2;k<11;k++)
                            {
                                count=count+intArr[k];
                            }
                            // console.log("count",count);

                            

                            var checksum=10- (count %10);
                            // console.log("checksum",checksum);

                            if (checksum>9)
                            {
                                     first=checksum%10;
                                     second=checksum/10;
                                    var neww=Math.floor(first+second);
                                    checksum=neww;
                                    return checksum;
                            }
                            return checksum;
        }



        function getGender(){
            var oe="";
           

            if($("#gen").is(':checked')) {
               
            
            for(var i=0;i<100;i++){
                var randomItem = 1 + Math.floor(Math.random() * 9);
                
                if(randomItem%2==1){
                    oe= randomItem;
                    return oe;
                    break;
                }
            }
               
            }
            
            else{
               
              
                for(var i=0;i<100;i++){
                    var randomItem = 1 + Math.floor(Math.random() * 9);
                    
                if(randomItem%2==0){
                    oe= randomItem;
                    return oe;
                    break;
                }
            }
               
               
            }

        }
             
    </script>
    

</body>
</html>