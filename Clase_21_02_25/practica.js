let opc = 2;

switch (opc) {
    case 0: //if
        let hace_calor = true;
        if (hace_calor) {
            console.log("Hoy es un dia caluroso");
        }else{
            console.log("Hoy no es un dia caluroso");
        }        
        break;

    case 1: //for
        for (let index = 1; index < 11; index++) {
            console.log("7 * ", index, " = ", index * 7);    
        }
        break;

    case 2: //do-while
        let i = 0;
        do {
            console.log("Dato => ", ++i)
        } while (i < 10);
        break;

    case 3: //suma
        let a = 6;
        let b = 5;
        console.log("Suma => ", a + b);        
        break;

    case 4: //potencia
        let c = 2;
        let d = 5;
        console.log(Math.pow(c, d));        
        break;
    
    case 5: //array
        let arr = [];
        //inserta valores en el array
        for (let index = 1; index < 7; index++) {
            arr.push(index)            
        }
        //muestar los valores del array
        for (let index = 0; index < arr.length; index++) {
            console.log(arr[index]);            
        }
        break;

    default:
        console.log("Opcion no disponible");
        break;
}