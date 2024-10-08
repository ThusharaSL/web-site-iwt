function showToast(message, duration = 3000, type = 'success') {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');

    toastMessage.innerText = message;
    toast.classList.add('show');

    if (type === 'success') {
        toast.classList.add('success');
    } else if (type === 'error') {
        toast.classList.add('error');
    } else if (type === 'warning') {
        toast.classList.add('warning');
    }

    // Hide the toast after the specified time
    setTimeout(function() {
        toast.classList.remove('show');
    }, duration);
}

function scrollToTop() {
    window.scrollTo(0, 0);
}