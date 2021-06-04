//alternativa a poquemon.js

let mas = document.getElementById('mas');
let menos = document.getElementById('menos');
let h5 = document.getElementById('h5');

h5.innerHTML = 1;
actualiza();

function incre() {
    h5.innerHTML++;
    actualiza();
}
function menos() {
    if (h5.innerHTML>1) {
        h5.innerHTML--;
        actualiza();
    }
}
function actualiza() {
    let contador = h5.innerHTML;
    const url ='https://pokeapi.co/api/v2/pokemon/'+contador+'/';
    fetch(url)
    .then(response => response.json())
    .then(data =>
        {    let nombre = document.getElementById('nombre');
        nombre.innerHTML=`${data.name}`;
    
        // imagen frente
        let frente = document.getElementById('frente');
        frente.innerHTML=` <img src='${data.sprites.front_default}'/>`;
    
        //imagen trasera
        let trasera = document.getElementById('trasera');
        trasera.innerHTML=`<img src='${data.sprites.back_default}'/>`;
    
        let identificador = document.getElementById('identificador');
        identificador.innerHTML=` ${data.id}`
    
            


        })
    .catch( err => console.log(err))
    
}