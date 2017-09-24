<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<script>

	var array = new Array();
	$(document).ready(function() {
		$.get("http://ricelaundry.000webhostapp.com/api/machines.php", function(data) {
			$.each(data, function (index, element) {
				/*array[index][0] = element.type;
				array[index][1] = element.timer;
				array[index][2] = element.working;*/
				alert(element.type+ " and index " + index);
			})
		}, "json");
	});
</script>