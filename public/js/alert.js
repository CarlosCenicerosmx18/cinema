    
function enviar(){
event.preventDefault();


var titulo=document.querySelector('#titulo');
var sinopsis=document.querySelector('#sinopsis');
console.log(sinopsis);
if(titulo.value==null || titulo.value==' ' || titulo.value==""){
    swal("Olvidaste poner un titulo", {
    content: "input",
  })
  .then((value) => {
    swal(`Valor asignado: ${value}`);
    titulo.value=value;
  });
}else if(sinopsis.value==null || sinopsis.value==' ' || sinopsis.value==""){
    swal("Olvidaste poner una sinopsis", {
        content: "input",
      })
      .then((value) => {
        swal(`Valor asignado: ${value}`);
        sinopsis.value=value;
      });
}else{
    
    Swal.fire({
        
        text: '¿Subir pelicula?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: "No",
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        }).then((result) => {
        if (result.value) {
        document.formulario_subir_pelicula.submit();
        }
        return false;
        })
}






}

function addActor(){
    event.preventDefault();

    Swal.fire({
    text: '¿Subir Actor?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: "No",
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    }).then((result) => {
    if (result.value) {
    document.formulario_subir_actor.submit();
        }
        return false;
        })
}

function relacion(){
    event.preventDefault();

    Swal.fire({
    text: '¿Crear relacion?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: "No",
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    }).then((result) => {
    if (result.value) {
    document.formulario_relacionar.submit();
        }
        return false;
        })
}


function action(){
  event.preventDefault();
  
  
  var titulo=document.querySelector('#action');
  
      swal("actualiza tu comentario", {
      content: "input",
    })
    .then((value) => {
      swal(`Valor actualizado a: ${value}`);
      titulo.value=value;
    });
      
      Swal.fire({
          
          text: '¿Actualizar comentario?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Si',
          cancelButtonText: "No",
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          }).then((result) => {
          if (result.value) {
          document.formulario_subir_pelicula.submit();
          }
          return false;
          })
  }
  
