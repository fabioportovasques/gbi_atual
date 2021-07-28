          <script >
        $(document).ready(() => {
            $('pesquisar').on('click',(e) => {
                e.preventDefault()  //Evitar o submit

                let dados = $('form-cons-veiculo').serialize();
                //console.log(dados)
                /*
                    traz os dados do forumario
                    traz as informações de chave 
                    e valor de todos os campos do
                    form
                */
                //ajax
                $.ajax({
                    type: 'POST',
                    url: 'cons-veiculo.php',
                    data: dados,//variavel dados recuperada em cima
                    success:dados => {console.log(dados) },
                    error: erro => { console.log(erro) }
                })
            })
        })
    </script>
