function activar(){
    var campo= $('#sinopsis').val();
    // var campo2= $('#sinopsis').val();
    // var campo3= $('#image_path').val();
    // var campo4= $('#movie_path').val();
    if((campo!=null)&&campo!=''){
        $('#boton_add_pelicula').attr('disabled',false);

    }else{
        $('#boton_add_pelicula').attr('disabled',true);
    }
}
