$(document).ready(function () {
    $('table tr button.delete').click(function () {
        $.ajax({
            url: $(location).attr('pathname') + '/' + $(this).data("id"),
            type: "DELETE",
            data: {"_token": $('meta[name="csrf-token"]').attr('content')},
            success: function (response) {
                if (response.type === 'success') {
                    window.location.reload();
                }
            }
        });
    });
});
