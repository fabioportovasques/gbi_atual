$(function(){

    $("#tipo_veiculo").on("change",function(){

        var idTipo_veiculo = $("#tipo_veiculo").serialize();
       //alert(idTipo_veiculo);



        $.ajax({

            type:'GET',
            url:'./ajax/ajax-busca-veiculos.php',
            data: idTipo_veiculo,
            dataType: 'json',
            beforeSend:function() {   //beforeSend mostra mensagem aguardando...


            },

            success: function( resultado){

                

                var list = $("#marca-veiculo-area");
                    var rows = "";
                    list.find("select option").remove();
                    $(resultado).each(function()  //percorre o json
                    {
                        rows += "<option name='marca_veiculo' value="+this.codmarca_veiculo+">"+this.marca_veiculo+"</option>";
                        list.find("select").html(rows);

                        //console.log(rows);
                    });

                    
                
            },

            error: function(){

            }


        });

    });

})




$(function(){

    $("#marca_veiculo").on("change",function(){

        var idMarca_veiculo = $("#marca_veiculo").serialize();
       //alert(idTipo_veiculo);



        $.ajax({

            type:'GET',
            url:'./ajax/ajax-busca-veiculos-modelo.php',
            data: idMarca_veiculo,
            dataType: 'json',
            beforeSend:function() {   //beforeSend mostra mensagem aguardando...


            },

            success: function( resultado){

                

                var list = $("#modelo-veiculo-area");
                    var rows = "";
                    list.find("select option").remove();
                    $(resultado).each(function()  //percorre o json
                    {
                        rows += "<option name='modelo_veiculo' value="+this.codmodelo_veiculo+">"+this.modelo_veiculo+"</option>";
                        list.find("select").html(rows);

                        //console.log(rows);
                    });

                    
                
            },

            error: function(){

            }


        });

    });

})


