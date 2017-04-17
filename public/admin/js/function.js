/*********************************************************
 *********************************************************
 *           Send Class Ajax And Call Method
 * *******************************************************
 ********************************************************/
$(document).ready(function () {
    let ajax = new Ajax();
    ajax.delete_user_row();
    ajax.delete_languages_row();
});


/*********************************************************
 *********************************************************
 *           Function Js / jQuery For Browser
 * *******************************************************
 ********************************************************/
$(document).ready(function(){
    /**
     * Mise en place du label actif pour la route courante dans la sidebar
     * @type {string}
     */
    let pathname = window.location.pathname;
    let uri = pathname.split('/');
    let param = uri[3];
    let linkSidebar = $('.'+param).text().toLowerCase().trim();
    if(param === linkSidebar){
        $('.'+param).addClass('open');
    }


    /**
     * Tinymce
     */
    /*
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | code | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
    */
});