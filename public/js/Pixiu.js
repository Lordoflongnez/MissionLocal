var open = document.getElementById('open');
var overlay = document.getElementById('overlay');
var close = document.getElementById('close');

open.addEventListener('click', openModal);
close.addEventListener('click', closePopup);

function openModal(){
    overlay.style.display = 'block';
}

function closePopup(){
    overlay.style.display = 'none';
}