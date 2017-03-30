/*********************************************************
 *********************************************************
 *           Send Class Ajax And Call Method
 * *******************************************************
 ********************************************************/
$(document).ready(function () {
    let ajax = new Ajax();
    ajax.delete_user_row();
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


});