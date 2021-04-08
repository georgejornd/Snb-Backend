$(document).ready(function() {

  //language change (flag icon change on click)
  $("#changer").click(function() {
    if ($("#changer").hasClass('british-flag')) {
      $("#changer").removeClass('british-flag');
      $("#changer").addClass('french-flag');
    } else {
      $("#changer").removeClass('french-flag');
      $("#changer").addClass('british-flag');
    }
  });

  //navbar active
  $(".nav a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
  });

  //Toggle abstract on Anchor page
  $('.abstract_content').hide()
  $('.open_abstract').click(function(event) {
    event.preventDefault();
    $(this).next(".abstract_content").toggle('slow');
  });

  //homepage carousel
  $('.carousel').carousel({interval: 3000});

  //left nav hamburger
  $('.hamburger').on('click', function(event){
    console.log("I am doing something");
    $("#main").toggleClass("show-left-nav");
  });

  // list-group all links
  $("#expandList").click(function(e) {
    e.preventDefault();
    $(".list-group").collapse("show");
  });
  $("#collapseList").click(function(e) {
    e.preventDefault();
    $(".list-group .list-group").collapse("hide");
  });

  // rotate list-group-item arrow on click
  $('.list-group-item .glyphicon-chevron-right').click(function() {
    $(this).toggleClass('rotated');
  });

  // fix all those odd # turned into ${__hash__}
  var links = document.getElementsByTagName('a');
  for(var i = 0; i< links.length; i++){links[i].href = links[i].href.replace("$%7B__hash__%7D", "#");}

  // do pagination for desired pages:
  if (!(typeof doPagination === 'undefined') && doPagination) {
    $('#newsListItems').pajinate({
      item_container_id : '.agenda',
      num_page_links_to_display: 10,
      nav_panel_id : '#pagingControls',
      items_per_page : 11,    
      show_first_last: false,
      wrap_around: true,
      nav_label_prev : '<<',
      nav_label_next : '>>'
    });
  }

});
