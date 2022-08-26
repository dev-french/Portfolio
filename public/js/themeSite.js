
const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

    const page = document.querySelector('#page-wrapper');

    // console.log(page);

    if (page.classList.contains('light')) {
        page.classList.add('dark');
        page.classList.remove('light');
        btnToggle.innerHTML = "🌙";


    } else if (page.classList.contains('dark')) {

        page.classList.add('light');
        page.classList.remove('dark');
        btnToggle.innerHTML = "🌞";
    }
});

