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
    let aTag = $("div[name='"+ name +"']");
    $('html,body').animate({scrollTop: aTag.offset().top - 200},'slow');
}

$.fn.exists = function () {
    return this.length !== 0;
}

$(".link-to-ongs").click(function() {
    if($("div[name='"+ 'anchor-ong' +"']").exists() ){
        scrollToAnchor('anchor-ong');
    }else{
        window.location.href = '/climat/#anchor-ong';   
    }
    
 });
 