<script>

jQuery(document).ready(function() {
  jQuery('.wrapper .tab-links a').on('click', function(e) {
    var currentAttrValue = jQuery(this).attr('href');

    // Show/Hide Tabs
    jQuery('.wrapper ' + currentAttrValue).show().siblings().hide();

    // Change/remove current tab to active
    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

   // e.preventDefault();
  });
 
//makes accordions collapsable 
  $(function() {
$( ".accordion" ).accordion({
  collapsible: true
});
//makes the accordionss closed by default
$( ".accordion" ).accordion({
  active: false
});
});

$(function() {
    $( ".menu_items" ).menu();
  });
  $( ".menu_items" ).menu({
  position: {of: "ui-menu"}
});

$( ".menu_items" ).menu( "collapseAll", null, true );

});
    </script>