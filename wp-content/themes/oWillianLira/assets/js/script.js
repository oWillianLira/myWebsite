$(document).ready(function(){
    $('a[href^="mailto:"], a[href^="tel:"]').addClass('dark');
});

// Saudação por período do dia
function greeting() {
    const txt = document.querySelector('.greeting h1 span');
    const d = new Date();
    let hour = d.getHours();

    if(txt != null) {
        if(hour >= 0 && hour < 12){
            txt.innerText = 'bom dia';
        }
        else if(hour >= 12 && hour < 18){
            txt.innerText = 'boa tarde';
        }
    }
};
greeting();
// Saudação por período do dia

// Header owl
$(window).scroll(function() {
    const header = document.querySelector('#header_owl .header_owl');
    if ($(window).scrollTop() > 100) { 
        header.classList.add('wide');
        header.parentElement.parentElement.classList.add('dark');
    } else {
        header.classList.remove('wide');
        header.parentElement.parentElement.classList.remove('dark');
    }
});

const wrapperMenu = document.querySelector('.wrapper-menu');
wrapperMenu.addEventListener('click', function(){
  wrapperMenu.classList.toggle('open');  
})
// Header owl

// Configuração do LightBox
lightbox.option({
    'resizeDuration': 300,
    'wrapAround': true,
    'disableScrolling': true,
});