// JavaScript para rolar suavemente para as seções quando um link de navegação é clicado
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const sectionID = this.getAttribute('href').substring(1);
        document.getElementById(sectionID).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
