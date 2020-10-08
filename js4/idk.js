function validateForm() {
  var x = document.forms["Form"]["txt_1"].value;
  if (x == "") {
    alert("The textfield must be filled in.");
    return false;
  }
}

function Hello()
{
  document.write("hello")
}