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
<<<<<<< HEAD
                var rows = "";
                list.find("select option").remove();
                $(resultado).each(function(){
                    rows += "<option value = "+this.codigo+">"+this.nome+"</option>";
                   
                    list.find("select").html(rows);
=======
                var nlist = $('#fabricante-area');
                var rows = "";
                var nrows = "";
                list.find("select option").remove();
                nlist.find("select option").remove();
                $(resultado).each(function(){
                    rows += "<option value = "+this.codigo+">"+this.nome+"</option>";
                    nrows += "<option value = '"+this.nome+"'>"+this.nome+"</option>";
                   
                    list.find("select").html(rows);
                    nlist.find("select").html(nrows);
>>>>>>> 56c1b387fbbe4a8339ab4f5917bafc78ae8134bc
                })
                

            },

            erro: function(resultado)
            {
                alert('deu errado');
            }
        })
    })




<<<<<<< HEAD
    $('#marca_veiculo').on('change', function(){

        let tpveiculo = $('#tipo_veiculo').val();
        let marcaveiculo = $('#marca_veiculo').val();

        
=======
    $('#fabricante_veiculo').on('change', function(){

        let tpveiculo = $('#tipo_veiculo').val();
        let marcaveiculo = $('#fabricante_veiculo').val();

        
       
>>>>>>> 56c1b387fbbe4a8339ab4f5917bafc78ae8134bc
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
                    
<<<<<<< HEAD
                        rows += "<option value = "+this.modelos[index].codigo+">"+this.modelos[index].nome+"</option>";
=======
                        rows += "<option value = '"+this.modelos[index].nome+"'>"+this.modelos[index].nome+"</option>";
>>>>>>> 56c1b387fbbe4a8339ab4f5917bafc78ae8134bc
                   
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
<<<<<<< HEAD
=======


   /* $('.fabricante_veiculo').on('change', function(){

        let descmarcaveiculo = $(this).('#fabricante_veiculo').html();

        alert(descmarcaveiculo);

    })*/
>>>>>>> 56c1b387fbbe4a8339ab4f5917bafc78ae8134bc
})