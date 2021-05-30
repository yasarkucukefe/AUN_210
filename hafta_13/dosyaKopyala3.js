const fs = require('fs');
const {performance} = require('perf_hooks');

const t0 = performance.now()
const okuStream = fs.createReadStream('./video/powder-day.mp4');
const yazStream = fs.createWriteStream('./kopyala/kopya.mp4', {highWaterMark:1024});

okuStream.on('data', (chunk) => {
    const sonuc = yazStream.write(chunk);
    if(!sonuc){
        console.log('Yazma kapasitesi aşıldı');
        okuStream.pause();
    }
});

yazStream.on('drain', () => {
    console.log("=>bekleyen veriler yazıldı. Tekrar okuma başlayabilir.");
    okuStream.resume();
});

okuStream.on('end', () => {yazStream.end();});

yazStream.on('close', () => {
    console.log('Kopyalama işlemi tamamlandı');
    const t1 = performance.now();
    console.log("Kopyalama süresi: ",(t1-t0)," milisaniye");
});

okuStream.on('error',(error)=>console.error(error.message));
yazStream.on('error',(error)=>console.error(error.message));

