const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

let $cmsKey;
let cmsValue;

document.querySelectorAll('[data-cms]').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        if (event.target.tagName.toLowerCase() === 'img') {
            $cmsKey = event.target;
            document.getElementById('cms-image').click();
        } else {
            cmsValue = event.target.innerText;
            event.target.contentEditable = true;
        }
    });

    item.addEventListener('blur', event => {
        if (event.target.tagName.toLowerCase() !== 'img') {
            if (event.target.innerText !== cmsValue) {
                const formData = new FormData();
                formData.append('_token', csrfToken);
                formData.append('key', event.target.dataset.cms);
                formData.append('value', event.target.innerText);
                fetch('/admin/cms', {method: 'POST', body: formData})
                    .then(response => response.json())
                    .then(data => {
                        event.target.innerText = data.value;
                        if (event.target.closest('a')) {
                            event.target.closest('a').href = getHref(data.value);
                        }
                    });
            }
        }
    });
});

document.getElementById("cms-image").onchange = function () {
    if (this.files.length) {
        const formData = new FormData();
        formData.append('_token', csrfToken);
        formData.append('file', this.files[0]);
        formData.append('key', $cmsKey.dataset.cms);

        fetch('/cms/upload', {method: 'POST', body: formData})
            .then(response => response.text())
            .then(data => {
                $cmsKey.src = data;
            });
    }
};
