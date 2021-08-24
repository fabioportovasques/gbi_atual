$(function(){

    $('#tipo_veiculo').on('change', function(){
        let tpveiculo = $('#tipo_veiculo').val();
        $.ajax({
            method:'GET',
            url:'https://parallelum.com.br/fipe/api/v1/'+tpveiculo+'/marcas',
            dataType:'json',
            
            success: function(resultado)
            {
                var list = $('#marca-veiculo-area');
                
                var rows = "";
                
                list.find("select option").remove();
                
                $(resultado).each(function(){
                    rows += "<option value = "+this.codigo+">"+this.nome+"</option>";              
                    list.find("select").html(rows);
                
                })
                

            },

            erro: function(resultado)
            {
                alert('deu errado');
            }
        })
    })




    $('#fabricante_veiculo').on('change', function(){

        let tpveiculo = $('#tipo_veiculo').val();
        let marcaveiculo = $('#fabricante_veiculo').val();
        

        let option = $('#fabricante_veiculo').find(":selected").text();

        $('#fabricante').val(option);
        
       
        $.ajax({
            method:'GET',
            url:'https://parallelum.com.br/fipe/api/v1/'+tpveiculo+'/marcas/'+marcaveiculo+'/modelos',
            dataType:'json',
            
            success: function(resultado)
            {
               
                
                console.log(resultado);

                var list = $('#modelo-veiculo-area');
                var rows = "";
                
                list.find("select option").remove();
                
                $(resultado).each(function(){

                    let tarray = resultado.modelos.length;
                    for (let index = 0; index < tarray; index++) {
                    
                        rows += "<option value = '"+this.modelos[index].nome+"'>"+this.modelos[index].nome+"</option>";
                   
                        list.find("select").html(rows);

                    }
                   
                })
                

            },

            erro: function(resultado)
            {
                alert('deu errado');
            }
        })
    })


   /* $('.fabricante_veiculo').on('change', function(){

        let descmarcaveiculo = $(this).('#fabricante_veiculo').html();

        alert(descmarcaveiculo);

    })*/
})