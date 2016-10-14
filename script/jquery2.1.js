$("article").hide();
$(".fnc-slide__action-btn").click(function(){
  $("article").toggle("slow");
  $("article").removeClass("demo-cont");
});