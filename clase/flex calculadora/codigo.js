let cad = "";
function add(n) {
    cad = cad + n ;
    console.log(n);
    let ex = document.getElementById('ex');
    ex.innerHTML= cad;
    
}
function resultado()
 {
    
    let res = document.getElementById('ex');
    let result = res.innerHTML;
    let igual = document.getElementById('resu');
    igual.innerHTML = eval(result);
    res.innerHTML = "Resultado de "+result+" es:";
}

function clr() {
    cad = "";
    let igual = document.getElementById('resu');
    let res = document.getElementById('ex');

     igual.innerHTML= "";
    res.innerHTML = 0;
    
}