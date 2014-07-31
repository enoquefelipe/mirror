$('[name=valortamanho]').val($('[name=tamanho]').val());
$('[name=tamanho]').on('input', function() {
    $('[name=valortamanho]').val(this.value);
});