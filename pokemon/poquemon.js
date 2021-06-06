
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

        let altura = document.getElementById('altura');
        altura.innerHTML =`Altura  ${data.height}`;

        let peso = document.getElementById('peso');
        peso.innerHTML=`peso ${data.weight}`;
        
    
        // imagen frente
        let frente = document.getElementById('frente');
        frente.innerHTML=`
            <img  width="250px" src="${data.sprites.front_default}" 
            onMouseOver=" this.style.width='350px'; src='${data.sprites.front_shiny}';"
            onMouseOut= "  this.style.width='250px'; src='${data.sprites.front_default}';">
`
        
        //imagen trasera
        let trasera = document.getElementById('trasera');
        trasera.innerHTML=`
            <img  width="250px"  src="${data.sprites.back_default}" 
            onMouseOver="  this.style.width='350px'; src='${data.sprites.back_shiny}';"
            onMouseOut= "  this.style.width='250px'; src='${data.sprites.back_default}';">
`
    
        let identificador = document.getElementById('identificador');
        identificador.innerHTML=`
        ${data.id}`
    
            
        })
    .catch( err => console.log(err))
    

}

var url ='https://pokeapi.co/api/v2/move/14/';
fetch(url)
.then(response => response.json())
.then(data =>
    {   

    console.log(data)
//     // imagen frente
//     let peso = document.getElementById('peso');
//     peso.innerHTML=`
     
//         Púlsa + 🢅 <img  width="250px"  src="${data.meta.aliment}" >
// `
    
    

        
    })
// .catch( err => console.log(err))





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
      //altura
        let altura = document.getElementById('altura');
        altura.innerHTML=`Altura   ${data.height}`;
        //peso
        let peso = document.getElementById('peso');
        peso.innerHTML=`peso ${data.weight}`;


        console.log(data)
        // imagen frente
        let frente = document.getElementById('frente');
        frente.innerHTML=`
            <img  width="250px"  src="${data.sprites.front_default}" 
            onMouseOver= "  this.style.width='350px'; src='${data.sprites.front_shiny}' ;" 
            onMouseOut= "  this.style.width='250px'; src='${data.sprites.front_default}';">
`
        
        //imagen trasera
        let trasera = document.getElementById('trasera');
        trasera.innerHTML=`
            <img  width="250px"  src="${data.sprites.back_default}" 
            onMouseOver=" this.style.width='350px'; src='${data.sprites.back_shiny}';"
            onMouseOut= " this.style.width='250px'; src='${data.sprites.back_default}';">
`
    
        let identificador = document.getElementById('identificador');
        identificador.innerHTML=`
        ${data.id}`
    
            
        })
    .catch( err => console.log(err))
    

}
 
// botones

