$(document).ready(function () {
    const urlParams = new URLSearchParams(window.location.search);
    let $modelType = $('#model_type');

    $modelType.val(urlParams.get('type')).change();
    $modelType.change(function () {
        if ($(this).val() === 'locomotive') {
            $('.locomotive-field').prop('disabled', false);
            $('.freight-field').prop('disabled', true);
            $('.passenger-field').prop('disabled', true);
            $('.locomotive').removeClass('d-none');
            $('.passenger-freight').addClass('d-none');
            $('.freight').addClass('d-none');
            $('.passenger').addClass('d-none');
        } else if ($(this).val() === 'freight') {
            $('.freight-field').prop('disabled', false);
            $('.locomotive-field').prop('disabled', true);
            $('.passenger-field').prop('disabled', true);
            $('.freight').removeClass('d-none');
            $('.passenger-freight').removeClass('d-none');
            $('.locomotive').addClass('d-none');
            $('.passenger').addClass('d-none');
        } else {
            $('.passenger-field').prop('disabled', false);
            $('.locomotive-field').prop('disabled', true);
            $('.freight-field').prop('disabled', true);
            $('.passenger').removeClass('d-none');
            $('.passenger-freight').removeClass('d-none');
            $('.locomotive').addClass('d-none');
            $('.freight').addClass('d-none');
        }
    });
});
