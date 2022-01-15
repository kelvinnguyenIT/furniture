$(function () {
    let csrfToken = $('meta[name=csrf-token]').attr("content");
    let title = $('meta[name=title]').attr("content");
    let message = $('meta[name=message]').attr("content");
    if (message) {
        toastr.info(message, title, {timeOut: 2000});
    }

    function loadImage() {
        document.querySelectorAll('img').forEach(item => {
            if (item.dataset.load) {
                item.src = item.dataset.load;
            }
        });
    }

    window.onload = loadImage;

    $('.js-datatable').DataTable({
        responsive: true,
        "order": [[0, "desc"]],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tất Cả"]]
    });

    $('.js-dropify').dropify();

    $('.js-summernote').each(function () {
        $(this).summernote({
            minHeight: 300,
            callbacks: {
                onMediaDelete: function (target) {
                    let url = target[0].getAttribute('src');
                    if (!url.includes('/images', 0)) {
                        return;
                    }

                    let formData = new FormData();
                    formData.append('_token', csrfToken);
                    formData.append('url', url);

                    fetch('/admin/image/destroy', {method: 'POST', body: formData})
                        .then(response => response.text());
                }
            }
        });
    });

    $(".js-delete-sweetalert").click(function (event) {
        event.preventDefault();
        Swal.fire({
            title: Language.titleDelete,
            text: Language.descriptionDelete,
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: Language.confirmDelete,
            cancelButtonText: Language.cancelDelete
        }).then((result) => {
            if (result.value) {
                $(this).unbind('click').click();
            }
        })
    });
});
