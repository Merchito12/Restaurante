
const boton = document.getElementById('btninicio');
const contemen = document.getElementById('mensaje');
const formulario = document.getElementById('form');
const usuario = document.getElementById('username');
const password = document.getElementById('password');


usuario.addEventListener("click", function (event) {
  intento();
  
});
password.addEventListener("click", function (event) {
  intento();
});
async function hashString(input) {
  const encoder = new TextEncoder();
  const data = encoder.encode(input);

  const hashBuffer = await crypto.subtle.digest('SHA-256', data);
  const hashArray = Array.from(new Uint8Array(hashBuffer));
  const hashHex = hashArray.map(byte => byte.toString(16).padStart(2, '0')).join('');

  return hashHex;
}



form.addEventListener("submit", function (event) {


  event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada


  var usuarioin = document.getElementById("username").value;
  var passwordin = document.getElementById("password").value;



  fetch(
    "http://127.0.0.1:8000/api/login",//va a la ruta api
    {
      method: "POST", headers: { 'Authorization': 'Basic ' + btoa(usuarioin + ":" + passwordin) }
    })

    .then(respuesta => respuesta.json())
    .then(datos => {
      // Ahora los datos están disponibles en la variable 'datos'
      switch (datos) {
        case 400:
          mensajes(2);
          


          break;
        case 403:
          mensajes(1);
          break;
        default:
          console.log("Bienvenido: " + datos.nombre);
          sessionStorage.setItem('token', datos.token_rembered)
          const urlcompleta="http://127.0.0.1:8000/api/clientes/"+datos.id;
          
          window.location.href = urlcompleta;
      
        }//

    }
    )

});
const token = sessionStorage.getItem('token');



fetch('http://127.0.0.1:8000/api/login', {

  method: 'POST', // o GET según sea el caso 

  headers: {

    'Authorization': `Bearer ${token}`,

  }

})

  .then(response => response.json())

  .then(json => console.log(json))

/*  .catch(error => console.error(error));  */

function mensajes(tipo) {
  console.log(tipo) ;
  if (tipo == 1) {
    contemen.innerHTML = '';
    const mensaje2 = document.createElement("label");
    mensaje2.textContent = "¡Usuario o contraseña incorrecto!";
    contemen.appendChild(mensaje2);
        /*   usuario.setAttribute('class','input-control-incorrecto') 
          password.setAttribute('class','input-control-incorrecto') 
 */       incorrectos();
    console.log("usuario o contraseña incorrecto")
  }else{
    contemen.innerHTML = '';
          const mensaje = document.createElement("label");
          mensaje.textContent = "¡Rellena todos los campos!";
          contemen.appendChild(mensaje);
          console.log("rellena todos los campos")
          incorrectos();
  }


}

function incorrectos() {
  usuario.setAttribute('class', 'input-control-incorrecto')
  password.setAttribute('class', 'input-control-incorrecto')

}
function intento() {
  usuario.setAttribute('class', 'input-control')
  password.setAttribute('class', 'input-control')

}




/*   function login(){
    event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada
 
   
    var usuario = document.getElementById("username").value;
    var password =  document.getElementById("password").value;
   hashString(password).then(hash => {
     console.log('Hash SHA-256 de la contraseña:', hash);
     fetch(
         "https://script.google.com/macros/s/AKfycby8LoRQd_XmCsIRMngcTLwUCFeA9Eo7xhhMJCoYAwEeskKbuW2-7_B_bvf3_Xzxv770/exec",
         {
           method: "POST",
           body: formData,
         })
  });
 
  } */

