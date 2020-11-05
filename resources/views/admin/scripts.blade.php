<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ config('app.asset_url') }}/js/bootstrap.min.js"></script>
<script src="{{ config('app.asset_url') }}/js/style.js"></script>

<script src="{{ config('app.asset_url') }}/js/style.js"></script>
<script>
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>
