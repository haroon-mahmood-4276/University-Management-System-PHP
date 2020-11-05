$(document).ready(function () {
  $(".PEdit").tooltip({ title: "Edit", delay: 100 });
  $(".PDelete").tooltip({ title: "Delete", delay: 100 });
  $(".SAttendance").tooltip({ title: "Attendance", delay: 100 });
  $(".SMarks").tooltip({ title: "Assessment", delay: 100 });
  $(".PSTDAdd").tooltip({ title: "Add Student", delay: 100 });
  $(".PTCHRAdd").tooltip({ title: "Add Teacher", delay: 100 });

  $("#myInput").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });

  // Model
  $("#mySTDBtn").click(function () {
    $("#mySTDModal").modal();
  });

  $("#myTCHRBtn").click(function () {
    $("#myTCHRModal").modal();
  });

  $("#myProgramBtn").click(function () {
    $("#myProgramModal").modal();
  });

  $("#mySchoolBtn").click(function () {
    $("#mySchoolModal").modal();
  });

  // $("#cbProgram").change(function () {
  //   var ProgramID = $(this).val();

  //   $.ajax({
  //     url: "../ajax/AjaxOp.php",
  //     method: "POST",
  //     data: { ProgramID: ProgramID },
  //     success: function (data) {
  //       $("#combosec").html(data);
  //     }
  //   });
  // });

  $(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
});
