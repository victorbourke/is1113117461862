$(document).ready(function(){
  
  $('.logo').hover(
       function(){ $(this).attr('class', 'logo logo--hover') },
       function(){ $(this).attr('class', 'logo') }
)
  
});