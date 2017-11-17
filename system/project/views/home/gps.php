<script type="text/javascript">
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(location) {
        console.log(location);
    }, function(error) {
        console.error(error);
    });
}

</script>

