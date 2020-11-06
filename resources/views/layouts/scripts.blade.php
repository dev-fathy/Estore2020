
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ config('app.asset_url') }}js/bootstrap.min.js"></script>
<script src="{{ config('app.asset_url') }}js/style.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
   $(document).ready(function() {
   $('#welcomeText').slideUp(3000);
});
</script>

<script>
$('.carousel').carousel({
  interval: 2000
})
</script>

<script type="text/javascript">jssor_1_slider_init();
    </script>
