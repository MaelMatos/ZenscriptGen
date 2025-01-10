document.addEventListener('DOMContentLoaded', function() {
    const itemImages = document.querySelectorAll('.invslot-item-image');

    itemImages.forEach(itemImage => {
        const tooltipText = itemImage.getAttribute('data-minetip-title');
        if (tooltipText) {
            const tooltipSpan = document.createElement('span');
            tooltipSpan.classList.add('tooltip-text');
            tooltipSpan.textContent = tooltipText;
            itemImage.appendChild(tooltipSpan);
        }
    });
});