$("#create-modal").on('shown.bs.modal', function () {
     $(this).find(".fname").focus().select();
});
$("#create-modal").on("hidden.bs.modal", function (e) {
    $(this).removeData("bs.modal").find(".modal-content").empty();
});
$("#edit-modal").on('shown.bs.modal', function () {
     $(this).find(".fname").focus();
});
$("#edit-modal").on("hidden.bs.modal", function (e) {
    $(this).removeData("bs.modal").find(".modal-content").empty();
});
