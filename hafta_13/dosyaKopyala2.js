const fs = require('fs');
const {performance} = require('perf_hooks');

const orjDosya = './video/powder-day.mp4';
const kopya = './kopyala/kopya.mp4';

const t0 = performance.now();
fs.readFile(orjDosya, (err, data)=>{
    if(err){console.log('Bir hata oluştu'); return;}
    fs.writeFile(kopya,data,'utf8',kopyaTmm);
})

const kopyaTmm = (err) => {
    if(err){console.log("bir hata oluştu");return;}
    console.log('Kopyalama işlemi tamamlandı');
    const t1 = performance.now();
    console.log("Kopyalama süresi: ",(t1-t0)," milisaniye");
}



