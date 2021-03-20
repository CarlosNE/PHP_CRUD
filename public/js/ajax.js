let formulario = document.getElementById("loginForm");
let request = new XMLHttpRequest();

formulario.addEventListener('submit', logSubmit);

function logSubmit(event){
    event.preventDefault();
    request.open("POST", "submitForm.php");
    request.send(new FormData( formulario));
}

