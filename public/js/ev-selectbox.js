(function($) {

	$.fn.EVselectbox = function() {
	
		return this.each(function(i) {
			i++;


			$(this).attr("data-select", i).hide();
			var placeholder = $(this).data("placeholder");
			var getclasses = $(this).attr("class");

			if($(this).prop("multiple")) {
				$(this).after("<div class='ev-selectbox ev-multiple-selectbox "+getclasses+"' data-evsnum='" + i + "''><a href='javascript:void(0);' class='ev-titlebox'><span>"+placeholder+"</span></a><ul class='ev-opts'></ul></div>");
			} else {
				$(this).after("<div class='ev-selectbox "+getclasses+"' data-evsnum='" + i + "''><a href='javascript:void(0);' class='ev-titlebox'><span>"+placeholder+"</span></a><ul class='ev-opts'></ul></div>");
			}
		

			var thisoptions = $(this).children("option").length;

			$(this).children("option").each(function(ics) {
				ics++;

				$(this).attr("data-opt", ics);

				var thisval = $(this).val();
				var thistxt = $(this).html();

				$(".ev-selectbox[data-evsnum='" + i + "'] ul").append("<li data-opt='"+ics+"'><a href='javascript:void(0);'>"+thistxt+"</a></li>");

			});

			var takewidth = $(".ev-selectbox[data-evsnum='" + i + "']").children("ul").innerWidth();


			$(".ev-selectbox[data-evsnum='" + i + "']").css({"width" : takewidth + 20});

		});

	};


})($);


$(document).ready(function() {





	$("body").on("click", ".ev-titlebox span",  function() {

		if($(this).parent(".ev-titlebox").parent(".ev-selectbox").hasClass("js-active")) {
			$(".ev-selectbox").removeClass("js-active");
		} else {
			$(".ev-selectbox").removeClass("js-active");
			$(this).parent(".ev-titlebox").parent(".ev-selectbox").addClass("js-active");
		}

		return false;

	});






	$("body").on("click", ".ev-opts li a",  function() {

		var takeval = $(this).parent("li").data("opt"); 
		var takeselect = $(this).parent("li").parent("ul").parent(".ev-selectbox").data("evsnum");
		var takehtml = $(this).html();


		if($(this).parents(".ev-selectbox").hasClass("ev-multiple-selectbox")) {


			if(!$(this).parent("li").hasClass("js-active")) {

				$(this).parents(".ev-selectbox").children(".ev-titlebox").append("<div class='js-one-select' data-divval='"+takeval+"'>"+takehtml+"</div>");
				$("select[data-select='"+takeselect+"']").children("option[data-opt='"+takeval+"']").attr("selected", "selected");
				$(this).parent("li").addClass("js-active");
			
			} else {

				$("select[data-select='"+takeselect+"']").children("option[data-opt='"+takeval+"']").removeAttr("selected");
				$(this).parents(".ev-selectbox").children(".ev-titlebox").children(".js-one-select[data-divval='"+takeval+"']").remove();
				$(this).parent("li").removeClass("js-active"); 

			}

			if($(this).parents(".ev-selectbox").children(".ev-titlebox").children("div").length > 0) {
				$(this).parents(".ev-selectbox").addClass("js-haveboxes");
			} else {
				$(this).parents(".ev-selectbox").removeClass("js-haveboxes");
			}


		} else {

			$(this).parent("li").parent("ul").children("li").removeClass("js-active");
			$(this).parent("li").addClass("js-active");

			$(this).parent("li").parent("ul").parent(".ev-selectbox").children(".ev-titlebox").children("span").html(takehtml);

			$("select[data-select='"+takeselect+"']").children("option").removeAttr("selected");
			$("select[data-select='"+takeselect+"']").children("option[data-opt='"+takeval+"']").attr("selected", "selected");


			$(this).parent("li").parent("ul").parent(".ev-selectbox").removeClass("js-active");

		}

	});


	$("body").on("click", ".js-one-select",  function() {

		var takeval = $(this).data("divval");
		var nedselect = $(this).parents(".ev-selectbox").data("evsnum");


		$("select[data-select='"+nedselect+"']").children("option[data-opt='"+takeval+"']").removeAttr("selected");
		$(".ev-selectbox[data-evsnum='"+nedselect+"']").children("ul").children("li[data-opt='"+takeval+"']").removeClass("js-active");


		if($(this).parent(".ev-titlebox").children("div").length > 1) {
			$(this).parent(".ev-titlebox").parent(".ev-selectbox").addClass("js-haveboxes");
		} else {
			$(this).parent(".ev-titlebox").parent(".ev-selectbox").removeClass("js-haveboxes");
		}

		$(this).remove();

	});


	$(document).click(function(e){
		if ($(e.target).closest(".ev-selectbox").length) return;
		$('.ev-selectbox').removeClass("js-active");
		e.stopPropagation();
	});

});



