var div_Value = null;
function displayInfo() {
  var rdvalue = document.getElementById("myradio");
  for (let index = 0; index < rdvalue.length; index++) {
    if (rdvalue[index].checked) {
      div_Value = rdvalue[i].value;
    }
  }

var chk_value = null;
  var chkvalue = document.getElementsByName("chkcourses");
  for(var j = 0; j < chkvalue; j++){
    if(chkvalue[j].checked){
        chk_value += chkvalue[j].value + " "
    }
  }
  alert("chk_value");
  var dtvalue = document.getElementById("dt").value

  document.getElementById("displayResult").innerHTML = "<table><tr><th>USN</th><th>Name</th><th>Division</th><th>Courses</th><th>Date</th></tr></table>"
}