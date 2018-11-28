jQuery(document).ready(function($){

    $(".readMore").on("click", function(e){
        e.preventDefault();
        var pagination=$(this).attr("data-page"); // exemple de récupération de contenu
        console.log(pagination);
        var ajax_section =$(".featured-articles-wrapper"); // zone ou renvoyer le contenu de l'AJAX
        jQuery.post(
            ajaxurl, // url du fichier admin-ajax.php,
            {
                'action': 'ajax-categoryMore', // nom de l'action à créer
                'pagination': pagination // exemple de variable à envoyer.
            },
            function(response){
              //console.log(response)
              ajax_section.append(response);
            }
        );
    });
});