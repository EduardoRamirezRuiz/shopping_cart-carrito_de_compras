$(document).ready(function() {
	$(".opcion").click(function() {
		if($("#" + $(this).attr("id") + "R").is(":visible")) {
			$("#" + $(this).attr("id") + "R").hide("slow");
		}
		else{
			if($("#" + $(this).attr("id") + "R").is(":hidden")) {
				$(".cuadro").hide("slow");
				$("#" + $(this).attr("id") + "R").show("slow");
			}
		}

	})
	$(".marca").click(function() {
		if($("#" + $(this).attr("id") + "E").is(":visible")) {
			$("#" + $(this).attr("id") + "E").hide("slow");
		}
		else{
			if($("#" + $(this).attr("id") + "E").is(":hidden")) {
				$(".marcaContent").hide("slow");
				$("#" + $(this).attr("id") + "E").show("slow");
			}
		}
	})

	$('.idxCarousel').carousel({
            interval: 1000
        });
})