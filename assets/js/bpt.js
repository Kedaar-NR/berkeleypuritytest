$("#submit").click(function() {
	var score = 100;
	var data = [];
	for (var index = 0; index < 100; index ++) {
		let checked = $(`#${index}`).prop("checked");
		if (checked) score -= 1;
		data.push(checked ? 1 : 0);
	}

	$.post("./backend/submit.php", { data: data, score: score });
	
	$("#questions").hide();
	$("#instructions").hide();
	$("#score").show();
	$("#score-h1").html(score);
	$(document).scrollTop(0);
});

$("#terms-link").click(function() {
	$("#terms").show();
	$("#questions").hide();
	$("#instructions").hide();
	$("#score").hide();
	$(document).scrollTop(0);
});
