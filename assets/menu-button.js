function toggleMenu() {
    let nav = document.getElementsByTagName('nav')[0];
    if (nav.classList.contains('open')) {
        nav.classList.remove('open');
        nav.classList.add('close');
        let a;
        for (a of nav.getElementsByTagName('a')) {
            a.classList.remove('open');
            a.classList.add('close');
        }
    } else {
        nav.classList.remove('close');
        nav.classList.add('open');
        let a;
        for (a of nav.getElementsByTagName('a')) {
            a.classList.remove('close');
            a.classList.add('open');
        }
    }
}

document.getElementById("menu-button").addEventListener("click", toggleMenu);
