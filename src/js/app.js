document.addEventListener('DOMContentLoaded', () => {
    eventListeners();

    darkMode();
});

function eventListeners() {
    const menu = document.querySelector('.mobile-menu');

    menu.addEventListener('click', navegationResponsive);
}

function navegationResponsive() {
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}

function darkMode() {
    const btnDark = document.querySelector('.dark-mode-btn');
    const preferenciaDark = window.matchMedia('(prefers-color-scheme: dark)');

    if(preferenciaDark.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    preferenciaDark.addEventListener('change', () => {
        if(preferenciaDark.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    btnDark.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}