document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
            .then(res => res.text())
            .then(data => {
                if (data.includes('error-page')) {
                    alert("Comment failed. Please check required fields.");
                    return;
                }

                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = data;

                const newComment = tempDiv.querySelector('.comment-list li:last-child');
                const commentList = document.querySelector('.comment-list');

                if (newComment && commentList) {
                    commentList.appendChild(newComment);
                    form.reset();
                }
            })
            .catch(err => console.error("AJAX comment failed:", err));
    });
});
