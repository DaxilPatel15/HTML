// custom js to load global header and footer at all pages
$(document).ready(function(){
  $(function(){
   $("#header").load("header.html");
   $("#footer").load("footer.html");
 });
});
