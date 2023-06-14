//Remove grey background from drawer
document.addEventListener("DOMNodeInserted", function (event) {
    const el = event.target
    if (typeof el === 'object' && el !== null && 'hasAttribute' in el && el.hasAttribute('drawer-backdrop')) {
        el.classList.remove('bg-gray-900')
    }
});

//Show error or access message for 5 seconds
document.addEventListener('DOMContentLoaded', function () {
    const success = document.getElementById('message_success')
    const error = document.getElementById('message_error')
    if (success != null) {
        setTimeout(function () {
            success.remove()
        }, 5000);
    } else if (error != null) {
        setTimeout(function () {
            error.remove()
        }, 5000);
    }
})
