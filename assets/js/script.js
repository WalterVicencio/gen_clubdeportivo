console.log("hola mundo");




/*
let t1 = new Date('2024-04-04');
let t2 = new Date('1995-04-05');

var eda = t1.getFullYear() - t2.getFullYear();
var m = t1.getMonth() - t2.getMonth();

if (m < 0 || (m === 0 && t1.getDate() < t2.getDate())) {
    eda--;
}
*/



fecha_nacimiento=document.querySelector("#fnac");


document.getElementById('fnac').addEventListener('change',()=>{
    var fecha=this.value;
    cumple= new Date(document.getElementById('fnac').value);

    let start = new Date().toISOString('en-us', {year:"numeric", month:"numeric", day:"numeric"});
    let info = start.split('T');
    let hoy=new Date(info[0]);
    let t1 = hoy;
    let t2 = cumple;
    var eda = t1.getFullYear() - t2.getFullYear();
    var m = t1.getMonth() - t2.getMonth();
    if (m < 0 || (m === 0 && t1.getDate() < t2.getDate())) {
        eda--;
    }
    document.getElementById('edad').value=eda;
})

