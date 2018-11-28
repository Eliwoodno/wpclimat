/*add overlay on page when displaying responsive menu 
prevent link clicking when user tries to close the menu*/
$('#responsive-menu-button').css('z-index','4!important');

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
    $('html,body').animate({scrollTop: aTag.offset().top - 150},'slow');
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
 
 let codeToLinks = {
    'AF': 'afrique', 
    'NA': 'amerique-du-nord',
    'OC': 'oceanie' ,
    'AS': 'asie', 
    'SA': 'amerique-du-sud',
    'EU': 'europe' 
    }
let translatedLabel = {
    'AF': 'Afrique', 
    'NA': 'Amérique du Nord',
    'OC': 'Océanie' ,
    'AS': 'Asie', 
    'SA': 'Amérique du Sud',
    'EU': 'Europe' 
    }

$('#map-container').vectorMap({
    map: 'continents_mill',
    backgroundColor:'#00D6A7',
    zoomOnScroll: false,
        
    onRegionClick:(event, regionCode) => { 
                      
            window.location.href = '/climat/'+codeToLinks[regionCode]; 
        },
        
    onRegionTipShow:(e, el, regionCode) =>{

            el.html(translatedLabel[regionCode]);
        },

});

 