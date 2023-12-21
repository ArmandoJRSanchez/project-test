// obtiene todos los elementos li del dom
var link = document.querySelectorAll('li');
// obtiene la url del navegador para identificar en que pagina se encuentra el usuario
console.log(ruta);

link.forEach(li => {
    // remuevo la clase active de todos los elemntos uno por uno 
    li.classList.remove('active');
    // obtengo el href de cada etiqueta <a href="./?ruta=principal"> 
    
    var href = li.lastElementChild.getAttribute('href').replace('./', '');
    console.log(href);
    // valido si la url superior coincide con la de alguna de <a> de mi documento 
    // y procedo a agregar la clase "active"
    if(href == ruta){
        li.classList.add('active');
    }    
});

var btnHide = document.querySelectorAll('.btn-menu');

btnHide.forEach(a => {
    a.addEventListener('click', function(e){
        e.preventDefault();
        var menu = document.querySelector('.menu');
        if(!menu.classList.contains('hide')){
            this.parentNode.classList.add('hide');
            this.classList.add('show');
        }else{
            this.parentNode.classList.remove('hide');
            this.classList.remove('show');
        }
    })
});

