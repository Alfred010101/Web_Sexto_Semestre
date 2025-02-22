let numero = 6;
let float = 12.324;
let boolean = true;
let gran_numero = BigInt(21313415351313513);

let numero_string = "2";

console.log(typeof(numero));
console.log(typeof(float));
console.log(typeof(boolean));
console.log(typeof(gran_numero));
console.log(numero + numero_string);

console.log(numero + parseInt(numero_string));

console.log( numero < 7 );
console.log( numero == '6');
console.log(numero === '6')

console.log( 5 > 10 && 15 < 20);
console.log( 5 > 10 || 20 > 15);
console.log( 5 < 10 && 20 < 15 || 20 < 3);

let esta_lloviendo = false;
console.log((esta_lloviendo) ? "esta lloviendo" : "no esta lloviendo");

let nombre_completo = "mi nombre debe ir aqui";
console.log(nombre_completo.length);
console.log(nombre_completo[6]);
console.log(nombre_completo.slice(1, 8));

console.log(nombre_completo)

let mensaje_largo = ` este solo es un mensaje
no se que mas escribir 
pero aqui termina`;

console.log(mensaje_largo);
console.log(mensaje_largo.replace("escribir", "agregar"));
console.log(nombre_completo.includes("fnkhs"));

let opc = 0;

switch (opc) {
    case 1:
        console.log("Opcion 1");
        break;

    case 2:
        console.log("Opcion 2");
        break;

    default:
        console.log("Default");
        break;
}

let my_arr = []
let su_arr = new Array();

console.log(typeof(my_arr));
console.log(typeof(su_arr));

my_arr = [2, 4, 5, 6, 1]
my_arr.push(324);
console.log(my_arr)


let set = new Set([23, 3, 5]);
console.log(set)
set.add(23);
set.add(22);
console.log(set)

let my_map = new Map([
    ["name", "Alfred"], 
    ["ap", "Arista"], 
    ["edad", 23]
]);

console.log(my_map);
my_map.set("name", "Alf");
console.log(my_map.get("name"))

my_map.delete("ap");
console.log(my_map);

for (let index = 0; index < my_arr.length; index++) {
    console.log("Elemento -> ", my_arr[index]);
}
