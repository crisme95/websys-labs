// var output = document.getElementById("testing");
// output.innerHTML = "fddd";

$(document).ready(function () {
	$.getJSON("assets/data.json", function (data) {
		var lectureData = data.Websys_course.lectures;
		var labData = data.Websys_course.labs;
		var lectureCount = 1;
		var labCount = 1;

		// create nav links of all lecture objects from JSON file
		for (let x in lectureData) {
			$("#lecturesNav").append(
				'<li class="nav-item"><a class="nav-link lectures" href="#displayContent" id="' +
					x +
					'">Lecture ' +
					lectureCount +
					"</a></li>"
			);
			lectureCount += 1;
		}

		// create nav lnks of all lab objects from JSON file
		for (let x in labData) {
			$("#labsNav").append(
				'<li class="nav-item"><a class="nav-link labs" href="#displayContent" id="' +
					x +
					'">Lab ' +
					labCount +
					"</a></li>"
			);
			labCount += 1;
		}

		// Loading lecture content
		$(".lectures").click(function () {
			var id = $(this).attr("id");
			$.getJSON("assets/data.json", function (jd) {
				var key = jd.Websys_course.lectures;
				$("#displayContent").html(
					"<h2>" +
						key[id].title +
						"</h2><p>" +
						key[id].description +
						'</p><a href="' +
						key[id].link +
						'">Slideshow</a>'
				);
			});
		});

		// Loading lab content
		$(".labs").click(function () {
			var id = $(this).attr("id");
			$.getJSON("assets/data.json", function (jd) {
				var key = jd.Websys_course.labs;
				$("#displayContent").html(
					"<h2>" +
						key[id].title +
						"</h2><p>" +
						key[id].description +
						'</p><a href="' +
						key[id].link +
						'">Directions</a>'
				);
			});
		});
	});
});
