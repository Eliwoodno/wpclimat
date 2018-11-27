/*add overlay on page when displaying responsive menu 
prevent link clicking when user tries to close the menu*/

$('#responsive-menu-button').on('click', () => {
    $('.overlay').show()
    
})
$('.overlay').on('click', () => {
    $('.overlay').hide()
})
$(window).on('resize', () => {
    if($(window).width() > 992)
    {
    $('.overlay').hide()
    }
})


function scrollToAnchor(name){
    var aTag = $("a[name='"+ name +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$(".link-to-ongs").click(function() {
    scrollToAnchor('anchor-ong');
 });
 