// hide and show extra-services
$(function(){

	//--------------------- to show/hide secondary navigation ----------------------------
    $('#extra-services').hide();
    $('#extra-services').parent().on('click', function(){

        //use '$(this)' instead of 'this' to retrieve the jQuery object instead of DOM object
        $('#extra-services').slideToggle();
        console.log($(this));
    });

    //--------------------- to update the text on the page -------------------------------
   	$("[data-editable]").each(function(){
		var url = window.location.href;

		var theClass = "";
		if($(this).hasClass("wysiwyg") == true){
			theClass = "wysiwyg";
		}

		var options = {
				type: "textarea",
				cssclass : theClass,
				submitdata : {
					_method: "PUT",
					field: $(this).attr("data-editable")
				},
				//loadurl : url+"?field="+$(this).attr("data-editable"),
				submit: "OK"
			};
		$(this).editable(url,options);
	});

	$(document).on("DOMNodeInserted",function(event){
		if($(event.target).hasClass("wysiwyg") == true){
			$(event.target).find("textarea").cleditor();
		}
	});
});