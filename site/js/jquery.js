$( document ).ready(function() {
 
 $(".test1").click(function(){

      $("#alltools").text($(this).text());
      $('#searchtool').attr("placeholder",$(this).text());

   });

  $(".test").click(function(){

      $("#within").text($(this).text());

   });

	    $( ".date" ).datepicker({ 
	    	changeMonth: true,
	        changeYear: true,
	        showButtonPanel: true,
	       // maxDate: '@maxDate',
	       // minDate: '@minDate'
	    	dateFormat: 'dd/mm/yy',
	    	yearRange: "-100:+0"

	    });
 
});