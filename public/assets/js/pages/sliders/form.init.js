$(function () {
    $('#image').FancyFileUpload({
        params: {
            _token: $('meta[name="csrf-token"]').attr('content'),
        },
        maxfilesize: 1000000,
        edit: false
    });

    let path = window.location.pathname;

    $('.img-delete-btn').on('click', function (e) {
        e.preventDefault();
        const id = $(this).attr("data-id");
        $.ajax({
            url: "/ubitcms/slider/image/delete/" + path.substring(path.lastIndexOf('/') + 1),
            type: "GET",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id
            },
            success: function (response) {
                window.location.reload();
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});
