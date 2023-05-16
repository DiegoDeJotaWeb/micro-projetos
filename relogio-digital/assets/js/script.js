const horas = document.querySelector('#horas');
const minutos = document.querySelector('#minutos');
const segundos = document.querySelector('#segundos');


const relogio  = setInterval(function time(){
    let dateToday = new Date();
    let hr = dateToday.getHours();
    let min = dateToday.getMinutes();
    let s = dateToday.getSeconds();



    hr = hr < 10? "0" + hr : hr;
    min = min < 10? "0" + min : min;
    s = s < 10? "0" + s : s;

    horas.textContent = hr;
    minutos.textContent = min;
    segundos.textContent = s;
});