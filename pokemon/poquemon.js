
 var contador = 1;
 
let  mas = document.getElementById('mas');
let mens = document.getElementById('menos');
mens.addEventListener('click', menos)
mas.addEventListener("click", suma)


// restar contador

function menos()
{
    contador--;    
   
      
    const url ='https://pokeapi.co/api/v2/pokemon/'+contador+'/';
    fetch(url)
    .then(response => response.json())
    .then(data =>
        {    let nombre = document.getElementById('nombre');
        nombre.innerHTML=`
        ${data.name}`;
    
        // imagen frente
        let frente = document.getElementById('frente');
        frente.innerHTML=`
            <img  width="250px" src="${data.sprites.front_default}" 
            onMouseOver="src='${data.sprites.front_shiny}';"
            onMouseOut= "src='${data.sprites.front_default}';">
`
        
        //imagen trasera
        let trasera = document.getElementById('trasera');
        trasera.innerHTML=`
            <img  width="250px"  src="${data.sprites.back_default}" 
            onMouseOver="src='${data.sprites.back_shiny}';"
            onMouseOut= "src='${data.sprites.back_default}';">
`
    
        let identificador = document.getElementById('identificador');
        identificador.innerHTML=`
        ${data.id}`
    
            
        })
    .catch( err => console.log(err))
    

}

// incrementa contador

function suma() 
{
    contador++;
   

      
    const url ='https://pokeapi.co/api/v2/pokemon/'+contador+'/';
    fetch(url)
    .then(response => response.json())
    .then(data =>
        {    let nombre = document.getElementById('nombre');
        nombre.innerHTML=`
        ${data.name}`;
    
        // imagen frente
        let frente = document.getElementById('frente');
        frente.innerHTML=`
            <img  width="250px"  src="${data.sprites.front_default}" 
            onMouseOver="src='${data.sprites.front_shiny}';"
            onMouseOut= "src='${data.sprites.front_default}';">
`
        
        //imagen trasera
        let trasera = document.getElementById('trasera');
        trasera.innerHTML=`
            <img  width="250px"  src="${data.sprites.back_default}" 
            onMouseOver="src='${data.sprites.back_shiny}';"
            onMouseOut= "src='${data.sprites.back_default}';">
`
    
        let identificador = document.getElementById('identificador');
        identificador.innerHTML=`
        ${data.id}`
    
            
        })
    .catch( err => console.log(err))
    

}
 
// botones

