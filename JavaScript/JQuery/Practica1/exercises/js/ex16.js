$("document").ready(function(){
  $("div")
  .on("mouseover",function(){
    $(this).css("background","url('https://66.media.tumblr.com/cfa010387f738a5f7691b7cb6303558e/tumblr_o6k5jlKw9A1rkugk9o1_500.jpg')");
  })
  .on("mouseout",function(){
    $(this).css("background","url('https://i1.sndcdn.com/artworks-000154671770-mhxpg8-t500x500.jpg')");

  })
  .on("click",function(){
    $(this).css("background","url('https://ae01.alicdn.com/kf/HTB13z8bKVXXXXXDXVXXq6xXFXXX9/CROPPED-NICOLAS-CAGE-AS-font-b-MONA-b-font-font-b-LISA-b-font-case-cover.jpg')");
    $(this).html("Los eventos han sido eliminados");
    $(this).off();
  })
});
