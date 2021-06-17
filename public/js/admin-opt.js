function menu(){
    var p1=document.querySelector('#paso1');
    var p2=document.querySelector('#paso2');
    var p3=document.querySelector('#paso3');
    var opt1=document.querySelector('#opt1');
    var opt2=document.querySelector('#opt2');
    var opt3=document.querySelector('#opt3');

    var section1=document.querySelector('.movie-info');
    var section2=document.querySelector('.actors-info');
    var section3=document.querySelector('.media-info');

    if( p1.checked== true){
        opt1.className='alert alert-success';
        section1.style.display="block";

    }else{
        opt1.className='alert alert-secondary';
        section1.style.display="none";
        
    }
    if( p2.checked== true){
        opt2.className='alert alert-success';
        section2.style.display="block";

    
    }else{
        opt2.className='alert alert-secondary';
        section2.style.display="none";

    } 
    if( p3.checked== true){
        opt3.className='alert alert-success';
        section3.style.display="block";

    
    }else{
        opt3.className='alert alert-secondary';
        section3.style.display="none";

    }
}

function ok() {
    alert('click');
}