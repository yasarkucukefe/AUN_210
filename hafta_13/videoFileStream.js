const fs = require('fs');

const readStream = fs.createReadStream('./video/powder-day.mp4');

readStream.on('data', (chunk) => {
    console.log('boyut:', chunk.length);
})

readStream.on('end', () => {console.log('Okuma stream tamamlandı')});

readStream.on('error', (error) => console.log('Bir hata oluştu:'));

readStream.pause();

process.stdin.on('data', (chunk) => {
    if(chunk.toString().trim() === "devam") {readStream.resume();}
    readStream.read();
});