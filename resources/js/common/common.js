function getHref(value) {
    if (value) {
        value = value.trim();
        let emailPattern = /^.{1,30}@.+\..{1,25}$/;
        if (emailPattern.test(value)) {
            return 'mailto:' + value;
        }

        if (value.length < 25) {
            let phone = value.replace(/[^+0-9]/g, '');
            if (phone.length > 9) {
                return 'tel:' + phone;
            }
        }

        if (value.length < 30 && (value.startsWith('http') || value.startsWith('#') || value.startsWith('/'))) {
            return value;
        }
    }

    return 'javascript:void(0)';
}
