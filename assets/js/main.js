// obtiene todos los elementos li del dom
var link = document.querySelectorAll('li');
// obtiene la url del navegador para identificar en que pagina se encuentra el usuario
var url = window.location.href.split('?')[1];

link.forEach(li => {
    // remuevo la clase active de todos los elemntos uno por uno 
    li.classList.remove('active');
    // obtengo el href de cada etiqueta <a href="./?ruta=principal"> 
    
    var href = li.lastElementChild.getAttribute('href').replace('./?', '');

    // valido si la url superior coincide con la de alguna de <a> de mi documento 
    // y procedo a agregar la clase "active"
    if(href == url){
        li.classList.add('active');
    }    
});