<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/material.min.js"></script>
<script src="/js/ripples.min.js"></script>

<script>
$(document).ready(function(){

});
$.material.init();
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
$("#create-modal").on('shown.bs.modal', function () {
     $(this).find(".fname").focus().select();
});
$("#edit-modal").on('shown.bs.modal', function () {
     $(this).find(".fname").focus();
});
$("#edit-modal").on("hidden.bs.modal", function (e) {
    $(this).removeData("bs.modal").find(".modal-content").empty();
});
</script>

</body>
