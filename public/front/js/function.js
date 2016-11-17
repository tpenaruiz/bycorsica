$(document).ready(function(){
    // On retire -1 au value du input
    $('.del_qte').on('click', function(){
        let newVal = parseInt($('._inputQte').val()) - 1;
        $('._inputQte').val(newVal);
        console.log($('._inputQte').val());
    })

    // On ajoute +1 au value du input
    $('.add_qte').on('click', function(){
        let newVal = parseInt($('._inputQte').val()) +1;
        $('._inputQte').val(newVal);
        console.log($('._inputQte').val());
    })
})