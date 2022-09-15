let btn = document.querySelectorAll('.nav-item');
btn.forEach((item) => {
    item.addEventListener('click', (e) => {
        e.preventDefault;
        const el = document.getElementById(item.getAttribute('data_link'));
        console.log(el);
        el.scrollIntoView({ behavior: 'smooth', block: 'center' });
        // console.log('hy');
    });
});