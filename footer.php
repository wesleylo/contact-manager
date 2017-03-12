<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/material.min.js"></script>
<script src="/js/ripples.min.js"></script>

<script>
$(document).ready(function(){

});
<!-- Menu Toggle Script -->
$.material.init();
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
$(".modal").on('shown.bs.modal', function () {
     $(this).find(".fname").focus().select();
 });
</script>

</body>
