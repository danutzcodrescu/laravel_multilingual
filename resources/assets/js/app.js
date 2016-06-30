var clicked=false;

$(".menu-button").click(function() {
    $("nav").toggle();
    clicked= $("nav").css("display")=="block" ? true : false;
});


$(window).resize(function() {
   if ($(window).width()>=768 && clicked==true) {
        clicked=false;
   }    
   if ($(window).width()>=768 && clicked==false && $("nav").css("display")=="none") {
       $("nav").show();
   }
   if ($(window).width()<768 && !clicked && $("nav").css("display")!="none") {
       $("nav").hide();
   }
});

$(".skills").click(function(){
    $(".skills").css({'background-color' : '', 'color' : ''});
    $(this).css({'background-color' : '#1b273d', 'color' : '#ffb600'})
    var id=$(this).attr("id");
    $(".shows").hide();
    $("#skill_"+id).show();
})
