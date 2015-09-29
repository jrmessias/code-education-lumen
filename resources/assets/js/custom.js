$(function () {
    $('[data-toggle="tooltip"]').tooltip()

    $('.excluir').on('click', function(e){
        if(confirm('Tem certeza que deseja excluir o registro?')){
            window.location($(this).attr('href'));
        }
        else{
            e.preventDefault();
        }
    });
});