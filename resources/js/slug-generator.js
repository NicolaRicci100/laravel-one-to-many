const slugField = document.getElementById('slug');
        const titleField = document.getElementById('title');
        titleField.addEventListener('input', () => {
            slugField.value = titleField.value.trim().toLowerCase().split(' ').join('-');
        });