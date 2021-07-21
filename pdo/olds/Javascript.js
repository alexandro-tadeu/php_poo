   $(document).ready(function(){
    $(document).on('submit','#FormCadastro',function(event){
        event.preventDefault();
        var dados=$(this).serialize();

        $.ajax({
            url: 'Cadastro.php',
            type: 'post',
            data: dados,
            success: function(data){
                $('.Resultado').empty().html(data);
            }

        });
    }
   }