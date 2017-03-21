<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/material.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script src="/js/modal.js"></script>

<script>
$.material.init();
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>

</body>
