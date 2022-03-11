M.AutoInit();
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  $(document).ready(function(){
    $('.tooltipped').tooltip();
$('.collapsible').collapsible();
});
