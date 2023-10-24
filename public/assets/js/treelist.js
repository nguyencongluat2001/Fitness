// Select the main list and add the class "hasSubmenu" in each LI that contains an UL
$('ul').each(function(){
  $this = $(this);
  $this.find("li").has("ul").addClass("hasSubmenu");
});
// Find the last li in each level
$('li:last-child').each(function(){
  $this = $(this);
  // Check if LI has children
  $this.closest('ul.nested').css("display", "none");
  $this.closest('ul.treeview-animated-list').css("display", "block");
  if ($this.children('ul').length === 0){
  } else {
    // Add the class "addBorderBefore" to create the pseudo-element :defore in the last li
    $this.closest('ul').children("li").last().children("a").addClass("addBorderBefore");
    // Add margin in the first level of the list
    $this.closest('ul').css("margin-top","5px");
    // Add margin in other levels of the list
    $this.closest('ul').css("border-left", "1px solid gray");
    $this.closest('ul').find("li").children("ul").css("margin-top","5px");
  };
});
// Add bold in li and levels above
$('ul li').each(function(){
  $this = $(this);
  $this.mouseenter(function(){
    $( this ).children("a[class=closed]").css({"color":"#336b9b"});
  });
  $this.mouseleave(function(){
    $( this ).children("a[class=closed]").css({"color":"#428bca"});
  });
});
// Add button to expand and condense - Using FontAwesome
$('ul li.hasSubmenu').each(function(){
  $this = $(this);
  $this.prepend("<a href='javascript:;'><i class='fa fa-plus-circle'></i><i style='display:none;' class='fa fa-minus-circle'></i></a>");
  $this.children("a").not(":last").removeClass().addClass("toogle");
});
// Actions to expand and consense
$('ul li.hasSubmenu a.toogle').click(function(){
  $this = $(this);
  $this.closest("li").children("ul").toggle("slow");
  $this.children("i").toggle();
  return false;
});