//Remove grey background from drawer
document.addEventListener("DOMNodeInserted", function (event) {
    const el = event.target
    if (typeof el === 'object' && el !== null && 'hasAttribute' in el && el.hasAttribute('drawer-backdrop')) {
        el.classList.remove('bg-gray-900')
    }
});
