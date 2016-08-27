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
});


$("#next_small").click(function() {
    var current = $(".project-images.current").attr("id");
    var id = parseInt(current.slice(-1))+1;
    if ($(".project-images").length>=id) {
        $("#"+current).removeClass('current').addClass('left');
        $("#project-"+id).removeClass('right').addClass('current');
    } else {
        $("#project-1").removeClass('left').addClass('current');
        for (i=2; i<=$(".project-images").length; i++) {
            $("#project-"+i).removeClass('left current').addClass('right');
        }
    }
});

$("#prev_small").click(function() {
    var current = $(".project-images.current").attr("id");
    var id = parseInt(current.slice(-1))-1;
    if (id>0) {
        $("#"+current).removeClass('current').addClass('right');
        $("#project-"+id).removeClass('left').addClass('current');
    } else {
        $("#project-"+$(".project-images").length).removeClass('right').addClass('current');
        for (i=1; i<$(".project-images").length; i++) {
            $("#project-"+i).removeClass('right current').addClass('left');
        }
    }
});
