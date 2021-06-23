$('#btn-simulacao').click(function() {
    event.preventDefault();

    var valor = $('#valor').val();
    var prazo = $('#prazo').val();

    $.ajax({
        type: 'POST',
        url: 'calculo-simulacao.php',
        dataType: 'JSON',
        data: {
            "valor": valor,
            "prazo": prazo
        },
        success: function(response) {
            var parcela = response.parcela;
            $('#resultadoSimulacao').show(200);
            $('.card-text[valor] strong').text('R$ ' + valor);
            $('.card-text[parcela] strong').text(prazo + 'x de R$ ' + parcela);
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log('Erro: ' + errorThrown ? errorThrown : xhr.status);
        }
    });
});