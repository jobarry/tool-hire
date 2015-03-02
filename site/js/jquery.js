$( document ).ready(function() {
 
 $(".test1").click(function(){

      $("#alltools").text($(this).text());
      $('#searchtool').attr("placeholder",$(this).text());

   });

  $(".test").click(function(){

      $("#within").text($(this).text());

   });
 
});