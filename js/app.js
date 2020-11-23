
const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners(){
    //Cuando el formulario de crear o editar se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e) {
    e.preventDefault();

    // console.log(e);
    // console.log('Presionaste...');
    //Leer los datos de los inputs
    const nombre = document.querySelector('#nombre').value,
          empresa = document.querySelector('#empresa').value,
          tel = document.querySelector('#tel').value;

    if(nombre === "" || empresa == "" || tel == "") {
        mostrarNotificacion();
    }else{
        console.log('Tiene algo');
    }
}

//notificación
function mostrarNotificacion() {
    const notificacion = document.createElement('div');
    notificacion.classList.add('notificacion');
    notificacion.textContent = "Hubo un error";

    //Formulario
    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

    //Ocultar y mostrar la notificación
    setTimeout(() => {
        notificacion.classList.add('visible');

        setTimeout(() => {
            notificacion.classList.remove('visible')
            notificacion.remove;
        }, 2000);
    }, 100);
}