function ValidateLogin() {
  //   var UserID = document.forms["LoginForm"]["txtUserID"].value;
  //   var Password = document.forms["LoginForm"]["txtPassword"].value;

  if (
    (txtUserID.value[0] == "F" ||
      txtUserID.value[0] == "f" ||
      txtUserID.value[0] == "S" ||
      txtUserID.value[0] == "s") &&
    txtUserID.value.length == 11
  ) {
    window.location = "../UNi-Portal-Management-System/Student/Home.php";
  } else if (
    (txtUserID.value[0] == "T" || txtUserID.value[0] == "t") &&
    txtUserID.value.length == 11
  ) {
    window.location = "../UNi-Portal-Management-System/Teacher/Student/Attendance.php";
  } else if (
    (txtUserID.value[0] == "A" || txtUserID.value[0] == "a") &&
    txtUserID.value.length == 11
  ) {
    window.location = "../UNi-Portal-Management-System/Admin/Dashboard.php";
  } else {
    alert("Enter Correct ID or Password.");
  }
}
