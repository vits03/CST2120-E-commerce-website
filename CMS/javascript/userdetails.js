modifiedData = {};
formChanged = false;
//modifies user details
function modifyUser() {
  if (formChanged) {
    $.ajax("../server/userdetails.php", {
      type: "POST", // http method
      data: modifiedData, // data to submit
      success: function (data, status, xhr) {},
      error: function (jqXhr, textStatus, errorMessage) {
        console.log("Error" + errorMessage);
      },
    });
  }
}

$("#fname").change(function () {
  modifiedData.name = $(this).val();
  formChanged = true;
});

$("#lname").change(function () {
  modifiedData.surname = $(this).val();
  formChanged = true;
});

$("#email").change(function () {
  modifiedData.email = $(this).val();
  formChanged = true;
});

$("#tel-num").change(function () {
  modifiedData.telephonenum = $(this).val();
  formChanged = true;
});

$("select").change(function () {
  modifiedData.country = $(this).val();
  formChanged = true;
});

$("#address").change(function () {
  modifiedData.address = $(this).val();
  formChanged = true;
});

$(document).ready(function () {
  $.get({
    url: "../server/userdetails.php",
    type: "get",
    dataType: "JSON",
    success: function (data) {
      console.log(data);
      data.forEach((user) => {
        $("#fname").attr("value", user["name"]);
        $("#lname").attr("value", user["surname"]);
        $("#email").attr("value", user["email"]);
        $("#tel-num").attr("value", user["telephonenum"]);
        $(`option[value=${user["country"]}]`).attr("selected", "true");
        $("#address").val(user["address"]);
      });
    },
  });
});
