const btne=document.getElementById('btn-e');
const btnp=document.getElementById('btn-p');
const btnt=document.getElementById('btn-t');
const btncambio=document.querySelectorAll(".cambio");
 document.addEventListener("DOMContentLoaded", function() {
    let estados = document.querySelectorAll('.estado');
console.log (estados);
    estados.forEach(estado => {
        if (estado.textContent==' Entregado') {
            estado.classList.add('entregado');
            console.log("entregado");
        } else /* if (estado.textContent.trim() === 'pendiente')  */{
            estado.classList.add('pendiente');
        }
    });
});


// Agregar el evento click y la función a ejecutar

/* btncambio.addEventListener('click', function(){
     */
   /*  botonesCambioEstado.forEach(boton => {
        boton.addEventListener('click', function() {
            const productoId = this.getAttribute('data-id');
            fetch(`/pedidos/${productoId}`, {
                method: 'PUT', // O el método que corresponda
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ estado: 'entregado' })
            })
        });
    });    */ 
/* }); */
btne.addEventListener('click',function(){
    const urlcompleta="http://127.0.0.1:8000/api/pedidos/"+"entregado";
          
          window.location.href = urlcompleta;
    
});
btnp.addEventListener('click',function(){
    const urlcompleta="http://127.0.0.1:8000/api/pedidos/"+"pendiente";
          
          window.location.href = urlcompleta;
    
});
btnt.addEventListener('click',function(){
    const urlcompleta="http://127.0.0.1:8000/api/pedidos/";
          
          window.location.href = urlcompleta;
    
});
btncambio.forEach(boton => {
    boton.addEventListener('click', function() {
        // Código de la función
        const productoId = this.getAttribute('data-id');
            fetch(`/api/pedidos/${productoId}`, {
                method: 'POST' // O el método que corresponda
                
            })
            .then(response => {
                if (response.ok) {
                    // Actualizar la celda de estado en la tabla
                    window.location.pathname = "/api/pedidos/";
                } else {
                    console.error('Error al actualizar el estado');
                }
            })
            .catch(error => {
                console.error('Error en la solicitud Fetch:', error);
            });
        
    });
});
