function menuShow(){
    let menuMobile = document.querySelector('.mobile-menu');
    if(menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open');
        document.querySelector('.icon').innerHTML = 'menu - fechado';
    }else{
        menuMobile.classList.add('open');
        document.querySelector('.icon').innerHTML = 'menu - aberto ';
    }
}

