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

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <title>Swedish BankID Validation</title>
  <link rel="icon" type="image/x-icon" href="./images/logo.png" />
  <style>
    .form-control{
      width:99.5%;

    }
    .mt-2 {
    margin-top: 1rem!important;
}
.mt-4 {
    margin-top: 0.085rem!important;
}
.btn-lg {
    padding: 0.2rem 1rem;
    font-size: 1.25rem;
    border-radius: 0.3rem;
}
  </style>
  
</head>

<body>
  <?php
  include('navbar2.html');
  include('header2.php');
?>
  <center>
  <div class="container-fluid">
    <!-- <h2 class="text-responsive h2 mt-2 pb-2 text-center shadow-sm" style="color: black; border-bottom: 2px solid grey;">
      Swedish
      Personal
      Identification
      Number (Bank
      ID) Validation
    </h2> -->
    <form action="#" autocomplete="off">
      <div class="row form-group mx-auto mt-4 mb-2 justify-content-md-center">
        <div id="one" style="padding: 0%;" class="col"></div>
        <div id="two" style="padding: 0%; margin: auto; " class="col-7">
          <div class="row">
            <div class="col-10" style="padding-right: 0%; padding-left: 30%;">
              <input id="pid" class="col form-control form-control-lg border border-primary border-3 text-center"
                type="text" placeholder="Please enter Personal Identity number">
            </div>
            <div class="col-1" style="padding-left: 0%;margin-left: -16px;">
              <span id="chkSpan" class="col-3 material-icons"
                style="visibility: hidden; font-size:2.5em; padding-top: 0.10em;"></span>
            </div>
          </div>

          <!-- <div class="row mx-auto justify-content-md-center " style="position:relative; top:0.5em; left:0em">
            <div class="text-center">
              <div style="visibility:hidden; margin: auto; white-space: nowrap; overflow: visible;" id="errorHere"
                class="" role="alert">
                alert
              </div>
              </button>
            </div>
          </div> -->

        </div>
        <div id="three" style="padding: 0%;" class="col-3"></div>
      </div>

      <div class="row mx-auto justify-content-md-center "
        style="position:relative; top:0em; left:0em; width: fit-content; ">
        <div class="text-center">
          <div style="visibility:hidden; margin: auto; white-space: nowrap; overflow: visible;" id="errorHere" class=""
            role="alert">
            Personal Identity Number cannot be blank!
          </div>
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col" style="padding: 0%;"></div>
        <div style="padding: 0%;" class=" col-5 mt-2 mb-4 text-center">
          <button style="width: 75%;height:16%;" id="pidSubmit" type="button"
            class="btn-block mt-0 mb-2 btn btn-primary btn-lg shadow-none"><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Validate Person Identity Number
          </button>

          <div style="margin: 0%;" class="mx-auto mt-4 row  gx-0" id="personalinfo">

            <div  style="    margin-left: 12.5%;;
    width: 75%;">
              <table id="t1" class="table">
                <thead>
                  <tr>

                    <th id="headerPersonalInfo" colspan="2" scope="col" style="color:red;font-size:18px;" class="text-center font-weight-bold">Personal
                      Information</th>

                  </tr>
                </thead>
                <tbody class="text-start">

                  <tr class="row m-0">
                    <th class="col-6" scope="row">DOB</th>
                    <td class="col-6" id="dobval">NA</td>

                  </tr>
                  <tr class="row m-0">
                    <th class="col-6" scope="row">Gender</th>
                    <td class="col-6" id="genderval">NA</td>


                  </tr>
                  <tr class="row m-0">
                    <th class="col-6" scope="row">Immigrant</th>
                    <td class="col-6" id="immival" colspan="2">NA</td>

                  </tr>
                  <tr class="row m-0">
                    <th class="col-6" scope="row">County</th>
                    <td class="col-6" id="countyval" colspan="2">NA</td>

                  </tr>

                </tbody>
              </table>
            </div>

          </div>
        </div>
        <div style="padding: 0%;" class="col"></div>
      </div>
    </form>
  </div>
</center>
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