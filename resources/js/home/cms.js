const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

// --------- BEGIN CMS ---------
let formData = new FormData();
formData.append('_token', csrfToken);

fetch('/cms', {method: 'POST', body: formData})
    .then(response => response.json())
    .then(data => {
        document.querySelectorAll('[data-cms]').forEach(item => {
            if (data.hasOwnProperty(item.dataset.cms)) {
                if (item.tagName.toLowerCase() === 'img') {
                    item.src = data[item.dataset.cms];
                    if (item.dataset.scroll) {
                        item.dataset.scroll = data[item.dataset.cms];
                    } else if (item.dataset.load) {
                        item.dataset.load = data[item.dataset.cms];
                    }
                    item.onload = function () {
                        item.style.visibility = 'visible';
                    };
                    item.onerror = function () {
                        item.style.visibility = 'visible';
                    };
                } else {
                    if (data[item.dataset.cms]) {
                        item.innerText = data[item.dataset.cms];
                    } else {
                        item.innerHTML = '&nbsp;';
                    }
                    if (item.closest('a')) {
                        item.closest('a').href = getHref(data[item.dataset.cms]);
                    }
                    item.style.visibility = 'visible';
                }
            } else {
                item.style.visibility = 'visible';
            }
        });
    });

// --------- END CMS ---------

// --------- BEGIN LAZY LOAD IMAGE ---------
function config() {
    document.querySelectorAll('img').forEach(item => {
        if (item.dataset.load) {
            item.src = item.dataset.load;
        }
    });
    sendMail();
}

window.onload = config;

let fired = false;
window.addEventListener("scroll", function () {
    if (fired === false && (document.documentElement.scrollTop != 0 || document.body.scrollTop != 0)) {
        document.querySelectorAll('img').forEach(item => {
            if (item.dataset.scroll) {
                item.src = item.dataset.scroll;
            }
        });
        fired = true;
    }
}, true);
// --------- END LAZY LOAD IMAGE ---------

// --------- BEGIN CUSTOMER REGISTER ---------
function sendMail() {
    if (document.querySelector('.js-form')) {
        document.querySelectorAll('.js-form').forEach(item => {
            item.addEventListener('submit', function (event) {
                event.preventDefault();
                for (let i = 0; i < event.target.elements.length; i++) {
                    event.target[i].disabled = true
                }

                let registerForm = new FormData();
                registerForm.append('_token', csrfToken);
                if (event.target.type) {
                    registerForm.append('type', event.target.type.value);
                }
                if (event.target.name) {
                    registerForm.append('name', event.target.name.value);
                }
                if (event.target.phone) {
                    registerForm.append('phone', event.target.phone.value);
                }
                if (event.target.email) {
                    registerForm.append('email', event.target.email.value);
                }
                if (event.target.content) {
                    registerForm.append('content', event.target.content.value);
                }
                if (event.target.address) {
                    registerForm.append('address', event.target.address.value);
                }
                fetch('/customer', {method: 'POST', body: registerForm})
                    .then(response => {
                        if (!response.ok) {
                            throw Error(response.statusText);
                        }
                        return response.text();
                    })
                    .then(data => {
                        let $submit = item.querySelector('[type=submit]');
                        if ($submit.tagName.toLowerCase() === 'input') {
                            $submit.value = data;
                        } else {
                            $submit.innerText = data;
                        }
                    })
                    .catch(error => {
                        // NOP
                    });
            });
        });
    }
}

// --------- END CUSTOMER REGISTER ---------
