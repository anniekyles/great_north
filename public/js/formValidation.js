//Function: Check that it's not empty
function checkEmpty(sFieldID){
   var oField = document.getElementById(sFieldID);
   var oErrorSpan = oField.previousElementSibling;
   var bResult = false;

   if (oField.value.length < 1){
      oErrorSpan.innerHTML = "Please complete";
      oErrorSpan.style.color = "#C1272D"; //maroon
   }else{
      oErrorSpan.innerHTML = "*";
      oErrorSpan.style.color = "#5C7300"; // dark green
      bResult = true;
   }
   return bResult;
}

function checkName(sFieldID){
   var oField = document.getElementById(sFieldID);
   var oErrorSpan = oField.previousElementSibling;
   var reTestName = new RegExp("([ \u00c0-\u01ffa-zA-Z'\-])+$");
   var bResult = false;

   if (reTestName.test(oField.value) === false){
      oErrorSpan.innerHTML = "Please enter a valid name";
      oErrorSpan.style.color = "#C1272D"; //maroon
   }else{
      oErrorSpan.innerHTML = "*";
      oErrorSpan.style.color = "#5C7300"; // dark green
      bResult = true;
   }
   return bResult;
}

function checkEmail(sFieldID){
   var oField = document.getElementById(sFieldID);
   var oErrorSpan = oField.previousElementSibling;
   var reTestEmail = new RegExp("([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$");
   var bResult = false;

   if (reTestEmail.test(oField.value) === false){
      oErrorSpan.innerHTML = "Please enter a valid email address";
      oErrorSpan.style.color = "#C1272D"; //maroon
   }else{
      oErrorSpan.innerHTML = "*";
      oErrorSpan.style.color = "#5C7300"; // dark green
      bResult = true;
   }
   return bResult;
}

//to check if every field is correct before the form is submitted
$( "#submit" ).on('click',function() {
   var bResult = false;
   var bTest1 = checkName('name');
   var bTest2 = checkEmail('email');
   var bTest3 = checkEmpty('subject');
   var bTest4 = checkEmpty('message');

   var oFormErrorSpan = document.getElementById("submitError");
   if((bTest1===true) && (bTest2===true) && (bTest3===true) && (bTest4===true)){
      bResult = true;
   }else{
      oFormErrorSpan.innerHTML = "Please complete required fields";
   }
   return bResult;
});