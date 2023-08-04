/*  MENU */
function abrirMenu(){
    let divForm = document.getElementById('div-form');
    menu.classList.toggle('show');

    /*  FORMULARIO */
    if(document.querySelector('.show')){
        divForm.classList.add('menu-form');
    } else {
        divForm.classList.remove('menu-form');
    }
}