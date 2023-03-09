$(document).ready(function () {
    $('table tr button.send-to-accept').click(function () {
        $.ajax({
            url: '/compositions/change-status/' + $(this).data("id"),
            type: "PUT",
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "status": $(this).data("status")
            },
            complete: function (response) {
                window.location.reload();
            }
        });
    })
});
