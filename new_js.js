let pidSubmit = document.getElementById("pidSubmit");
let inp = document.getElementById("pid");
let chkSpan = document.getElementById("chkSpan");
let personalinfo = document.getElementById("personalinfo");
let dobval = document.getElementById("dobval");
let genderval = document.getElementById("genderval");
let immival = document.getElementById("immival");
let countyval = document.getElementById("countyval");
let errorHere = document.getElementById("errorHere");
let t1 = document.getElementById("t1");
// let alertmsg = document.getElementById("alertmsg");
var myVar;
let gender;

let dob = "";

// let textclear = 0;

inp.addEventListener("click", () => {
  // if (textclear) {
  //   inp.value = "";
  //   personalinfo.style.visibility = "hidden";
  // }
  // chkSpan.style.visibility = "hidden";
  // textclear = 0;
  // inp.classList.remove("border-success");
  // inp.classList.remove("border-warning");
  // inp.classList.remove("border-danger");
  // inp.classList.add("border-primary");
});

pidSubmit.addEventListener("click", () => {
  let x = inp.value;
  if (/^\d+$/.test(x)) {
    // console.log("Only numbers entered!");
    callNumberCheck(x);
  } else if (x.length === 0) {
    $("#alertdiv").remove();
    // alert("Number should be of 10 or 12 digits only!");
    // console.log(myVar);
    // clearTimeout(myVar);
    showAlert("Personal Identity Number cannot be blank!", " alert-warning");
    // failureCross();
    warningExclaim();
    warningInput();
  } else {
    $("#alertdiv").remove();
    // alert("Please enter a valid number");
    // console.log(myVar);
    // clearTimeout(myVar);
    showAlert(
      "Please enter a valid Personal Identity Number!",
      "alert-warning"
    );
    // failureCross();
    warningExclaim();
    warningInput();
  }
});

let callNumberCheck = (x) => {
  if (x.length === 10 || x.length === 12) {
    // console.log("The number length is fine");
    if (doDateCheck(x)) {
      // console.log(`x is : ${x}`);
      callLengthCheck(x);
    } else {
      // console.log("doDateCheck failed");
    }
  } else {
    $("#alertdiv").remove();
    // alert("Number should be of 10 or 12 digits only!");
    // console.log(myVar);
    // clearTimeout(myVar);
    showAlert(
      "Personal Identity Number should be of either 10 digits or 12 digits!",
      "alert-warning"
    );
    // failureCross();
    warningExclaim();
    warningInput();
  }
};

let doDateCheck = (x) => {
  let year = "",
    mnth = "",
    day = "";

  let xarr = x.split("");

  if (x.length === 12) {
    for (let i = 0; i < 4; i++) year += xarr.shift();
    //console.log(year);
  } else {
    for (let i = 0; i < 2; i++) year += xarr.shift();
    year = year.padStart(4, "19");
    //console.log(year);
  }

  mnth = xarr.shift();
  mnth += xarr.shift();
  //console.log(mnth);

  day = xarr.shift();
  day += xarr.shift();
  // console.log(day);

  let mmm = getMonth(mnth);
  dob = `${day}-${mmm}-${year}`;

  year = parseInt(year);
  mnth = parseInt(mnth);
  day = parseInt(day);

  //console.log(xarr);
  // showPersonalInfo(xarr);

  let currYear = new Date().getFullYear();
  let currMonth = new Date().getMonth() + 1;
  let currDay = new Date().getDate();

  //console.log(`xarr is ${xarr}`);
  //console.log(currYear, currMonth, currDay);
  if (!(year >= 1900 && year <= currYear)) {
    $("#alertdiv").remove();
    // alert("Please enter a Valid Year!");
    // console.log(myVar);
    // clearTimeout(myVar);
    showAlert(
      "This is not a valid Person Identity Number - Invalid DOB!",
      "alert-warning"
    );
    // failureCross();
    warningExclaim();
    warningInput();
    return 0;
  } else {
    if (
      (year == currYear && !(mnth >= 1 && mnth <= currMonth)) ||
      (year != currYear && !(mnth >= 1 && mnth <= 12))
    ) {
      $("#alertdiv").remove();
      // alert("Please enter a Valid Month!");
      // clearTimeout(myVar);
      showAlert(
        "This is not a valid Person Identity Number - Invalid DOB!",
        "alert-warning"
      );
      // failureCross();
      warningExclaim();
      warningInput();
      return 0;
    } else {
      if (mnth == currMonth) {
        //this month
        if (!(day >= 1 && day <= currDay)) {
          $("#alertdiv").remove();
          // alert("Please enter a Valid Day!");
          // clearTimeout(myVar);
          showAlert(
            "This is not a valid Person Identity Number - Invalid DOB!",
            "alert-warning"
          );
          // failureCross();
          warningExclaim();
          warningInput();
          return 0;
        } else {
          // console.log("All data OK");
          // showPersonalInfo(xarr);
          // return 1;
          return showPersonalInfo(xarr);
        }
      } else {
        //other month
        if (mnth == 2) {
          //Feb
          if (year % 400 == 0 || (year % 4 == 0 && year % 100 != 0)) {
            //Leap
            if (!(day >= 1 && day <= 29)) {
              $("#alertdiv").remove();
              // alert("Please enter a Valid Day!");
              // clearTimeout(myVar);
              showAlert(
                "This is not a valid Person Identity Number - Invalid DOB!",
                "alert-warning"
              );
              // failureCross();
              warningExclaim();
              warningInput();
              return 0;
            } else {
              // console.log("All data OK");
              // showPersonalInfo(xarr);
              // return 1;
              return showPersonalInfo(xarr);
            }
          } else {
            //Not Leap
            if (!(day >= 1 && day <= 28)) {
              $("#alertdiv").remove();
              // alert("Please enter a Valid Day!");
              // clearTimeout(myVar);
              showAlert(
                "This is not a valid Person Identity Number - Invalid DOB!",
                "alert-warning"
              );
              // failureCross();
              warningExclaim();
              warningInput();
              return 0;
            } else {
              // console.log("All data OK");
              // showPersonalInfo(xarr);
              // return 1;
              return showPersonalInfo(xarr);
            }
          }
        } else {
          //Not Feb
          if (
            mnth == 1 ||
            mnth == 3 ||
            mnth == 5 ||
            mnth == 7 ||
            mnth == 8 ||
            mnth == 10 ||
            mnth == 12
          ) {
            //31 day month
            if (!(day >= 1 && day <= 31)) {
              $("#alertdiv").remove();
              // alert("Please enter a Valid Day!");
              // clearTimeout(myVar);
              showAlert(
                "This is not a valid Person Identity Number - Invalid DOB!",
                "alert-warning"
              );
              // failureCross();
              warningExclaim();
              warningInput();
              return 0;
            } else {
              // console.log("All data OK");
              // showPersonalInfo(xarr);
              // return 1;
              return showPersonalInfo(xarr);
            }
          } else {
            //30 day month
            if (!(day >= 1 && day <= 30)) {
              $("#alertdiv").remove();
              // alert("Please enter a Valid Day!");
              // clearTimeout(myVar);
              showAlert(
                "This is not a valid Person Identity Number - Invalid DOB!",
                "alert-warning"
              );
              // failureCross();
              warningExclaim();
              warningInput();
              return 0;
            } else {
              // console.log("All data OK");
              // showPersonalInfo(xarr);
              // return 1;
              return showPersonalInfo(xarr);
            }
          }
        }
      }
    }
  }
  // showPersonalInfo(xarr);
  // console.log(`xarr is : ${xarr}`);
  // return showPersonalInfo(xarr);
};

let callLengthCheck = (x) => {
  if (x.length === 12) {
    let xarr = x.split("");
    xarr.shift();
    xarr.shift();
    x = xarr.join("");
  }

  if (callCheckSum(x)) {
    successInput();

    // chkSpan.style.color = "green";
    // chkSpan.innerHTML = "check";
    // chkSpan.style.visibility = "visible";
    successTick();
    showAlert(
      "Personal Identity Number has been validated successfully!",
      " alert-success"
    );
    personalinfo.style.visibility = "visible";
    // textclear = 1;
  } else {
    showAlert(
      "This is not a valid Person Identity Number - Checksum error!",
      "alert-danger"
    );
    failureInput();
    failureCross();

    // chkSpan.style.color = "red";
    // chkSpan.innerHTML = "clear";
    // chkSpan.style.visibility = "visible";
  }
};

let successTick = () => {
  chkSpan.style.color = "green";
  chkSpan.innerHTML = "check";
  chkSpan.style.visibility = "visible";
};

let warningExclaim = () => {
  // chkSpan.style.color = "#fff3cd";
  chkSpan.style.color = "#ffa159";
  chkSpan.innerHTML = "report";
  chkSpan.style.visibility = "visible";
  dobval.innerHTML = "NA";
  genderval.innerHTML = "NA";
  immival.innerHTML = "NA";
  countyval.innerHTML = "NA";
};

let failureCross = () => {
  chkSpan.style.color = "red";
  chkSpan.innerHTML = "clear";
  // chkSpan.innerHTML = "report";
  chkSpan.style.visibility = "visible";
  dobval.innerHTML = "NA";
  genderval.innerHTML = "NA";
  immival.innerHTML = "NA";
  countyval.innerHTML = "NA";
};

let successInput = () => {
  inp.classList.remove("border-primary");
  inp.classList.remove("border-warning");
  inp.classList.remove("border-danger");
  inp.classList.add("border-success");
  //console.log(inp);
  //console.log("Called Me");
  //console.log("This is gender - " + gender);
  if (gender == "Male") {
    t1.classList.remove("table-danger");
    t1.classList.add("table-primary");
  } else if (gender == "Female") {
    t1.classList.add("table-danger");
    t1.classList.remove("table-primary");
  }
};

let failureInput = () => {
  inp.classList.remove("border-primary");
  inp.classList.remove("border-warning");
  inp.classList.remove("border-success");
  inp.classList.add("border-danger");
  t1.classList.remove("table-danger");
  t1.classList.remove("table-primary");
};

let warningInput = () => {
  inp.classList.remove("border-primary");
  inp.classList.remove("border-danger");
  inp.classList.remove("border-success");
  inp.classList.add("border-warning");
  t1.classList.remove("table-danger");
  t1.classList.remove("table-primary");
};

// let normalInput = () => {
//   inp.classList.remove("border-danger");
//   inp.classList.remove("border-success");
//   inp.classList.add("border-primary");
// };

let callCheckSum = (x) => {
  //checksum calculation
  let yarr = x.split("");
  let cksum = yarr.pop();
  let count = 0;
  for (let i = 0; i < yarr.length; i++) {
    let val = 0;
    if (i % 2 == 0) {
      val += yarr[i] * 2;
    } else val += yarr[i];
    let v = val.toString();
    for (let i = 0; i < v.length; i++) {
      count += parseInt(v[i]);
    }
  }
  count = 10 - (count % 10);

  if (count == cksum) {
    // console.log("Yay");
    return 1;
  } else {
    // console.log("Nay");
    return 0;
  }
};

// --------------------------------------------------------------------------

let showPersonalInfo = (xarr) => {
  let county = "";
  let imm = "";

  county += xarr.shift(); //this is the 7th(yy) or 9th(yyyy) letter from left
  imm = parseInt(county);

  // if (imm == 9) imm = "Yes";
  // else imm = "No";

  county += xarr.shift();

  // if (county.toString() == 7 || county.toString() == 9) imm = "Yes";
  // else imm = "No";
  // console.log("Hi", county.toString());

  gender = "";
  gender += xarr.shift();
  let g = parseInt(gender);
  //console.log("Gender is " + gender);
  if (g % 2 == 0) gender = "Female";
  else gender = "Male";

  let ct = parseInt(county);
  let county_arr = [
    "Stockholm", //1
    "", //2
    "Uppsala", //3
    "Södermanland", //4
    "Östergötland", //5
    "Jönköping", //6
    "Kronoberg", //7
    "Kalmar", //8
    "Gotland", //9
    "Blekinge", //10
    "", //11
    "Skåne", //12
    "Halland", //13
    "Västra Götaland", //14
    "", //15
    "", //16
    "Värmland", //17
    "Örebro", //18
    "Västmanland", //19
    "Dalarna", //20
    "Gävleborg", //21
    "Västernorrland", //22
    "Jämtland", //23
    "Västerbotten", //24
    "Norrbotten", //25
  ];

  if (imm == 9) {
    // console.log("AAAAA");
    countyval.innerHTML = "Not applicable";
    immival.innerHTML = "Yes";
    dobval.innerHTML = dob;
    genderval.innerHTML = gender;
  } else {
    if (ct < 1 || ct > 25 || county_arr[ct - 1] == "") {
      // console.log("BBBBBB");
      //Invalid County alert
      dobval.innerHTML = "NA";
      genderval.innerHTML = "NA";
      immival.innerHTML = "NA";
      countyval.innerHTML = "NA";

      showAlert(
        "This is not a valid Person Identity Number - Invalid County!",
        " alert-danger"
      );
      failureCross();
      failureInput();

      // console.log("Reached here");
      return 0;
    } else {
      // console.log("DDDDD");
      countyval.innerHTML = county_arr[ct - 1];
      immival.innerHTML = "No";
      dobval.innerHTML = dob;
      genderval.innerHTML = gender;
    }
  }
  /*
  if (ct < 1 || ct > 25 || county_arr[ct - 1] == "") {
    if (imm == 9) {
      console.log("AAAAA");
      countyval.innerHTML = "Unknown";
      immival.innerHTML = "Yes";
      dobval.innerHTML = dob;
      genderval.innerHTML = gender;
    } else {
      console.log("BBBBBB");
      //Invalid County alert
      dobval.innerHTML = "NA";
      genderval.innerHTML = "NA";
      immival.innerHTML = "NA";
      countyval.innerHTML = "NA";

      showAlert(
        "This is not a valid Person Identity Number - Invalid County",
        " alert-danger"
      );
      failureCross();
      failureInput();

      console.log("Reached here");
      return 0;
    }
  } else {
    if (imm == 9) {
      console.log("CCCCC");
      countyval.innerHTML = "NA";
      immival.innerHTML = "Yes";
      dobval.innerHTML = dob;
      genderval.innerHTML = gender;
    } else {
      console.log("DDDDD");
      countyval.innerHTML = county_arr[ct - 1];
      immival.innerHTML = "No";
      dobval.innerHTML = dob;
      genderval.innerHTML = gender;
    }
  }
  */
  return 1;
};

function showAlert(message, alerttype) {
  // $("body").prepend(
  //   '<div class="" style="position:relative; top:150px; right:580px; float: right; margin-bottom: 16px;"> <div class="row text-center abc" style="width:400px;"><div id="alertdiv" class=" alert alert-dismissible fade show ' +
  //     alerttype +
  //     '" role="alert">' +
  //     message +
  //     '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close" ></button></div></div></div>'
  // );

  // $("body").prepend(
  //   '<div id="alertdiv" class="text-center alert alert-warning" role="alert" style="position:relative; width:50em; height:2em; float:right; align-items: center;">' +
  //     message +
  //     "</div>"
  // );

  // errorHere.classList.remove = "alert-warning";
  // errorHere.classList.remove = "alert-warning";

  //errorHere.classList.add = alerttype;
  // console.log(alerttype);
  errorHere.className = "";
  errorHere.className += alerttype;
  // console.log(errorHere);
  errorHere.style.visibility = "visible";
  errorHere.innerHTML = message;

  setTimeout(() => {
    errorHere.style.visibility = "hidden";
  }, 3000);
  // errorHere.style.width = "25%";

  // close it in 3 secs
  clearTimeout(myVar);
  // myVar = setTimeout(function () {
  //   $("#alertdiv").remove();
  //   // normalInput();
  // }, 3000);
}

let getMonth = (mnth) => {
  mnth = parseInt(mnth);
  switch (mnth) {
    case 1:
      return "Jan";
    case 2:
      return "Feb";
    case 3:
      return "Mar";
    case 4:
      return "Apr";
    case 5:
      return "May";
    case 6:
      return "Jun";
    case 7:
      return "Jul";
    case 8:
      return "Aug";
    case 9:
      return "Sep";
    case 10:
      return "Oct";
    case 11:
      return "Nov";
    case 12:
      return "Dec";
    default:
      return "NA";
  }
};
