function ale(min, max)
 {
    var numero = Math.floor(Math.random()* (max - min+1) +min);
    return numero;

}

let piedra = 0;
let papel = 1;
let tijera = 2;

let opciones = ["piedra","papel","tijera"];
let maquina = ale(0,2);

let opcionusuario = prompt("eleje una opcion \n piedra 0 papel  1 tijera 2");
alert("elegiste "+ opciones[opcionusuario]);
alert("Maquina eligio "+ opciones[maquina]);

if(opcionusuario == piedra)
{
    if(maquina == piedra)
    {
        alert("empate");
    }else if(maquina == papel)
    {
        alert("Ganasye")
    }
    else if(maquina == tijera)
    {
        alert("Perdiste");
    }
}

if(opcionusuario == papel)
{
    if(maquina == papel)
    {
        alert("empate");
    }else if(maquina == tijera)
    {
        alert("Perdiste");
    }
    else if(maquina == piedra)
    {
        alert("Ganaste");
    }
}

if(opcionusuario == tijera)
{
    if(maquina == tijera)
    {
        alert("empate");
    }else if(maquina == piedra)
    {
        alert("Perdiste")
    }
    else if(maquina == papel)
    {
        alert("Ganaste");
    }
}