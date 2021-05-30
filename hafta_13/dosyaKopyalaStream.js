const fs = require('fs');

const okuStream = fs.createReadStream('./video/powder-day.mp4');
const yazStream = fs.createWriteStream('./kopyala/kopya.mp4');

okuStream.on('data', (chunk) => yazStream.write(chunk));

okuStream.on('end', () => {yazStream.end();});

yazStream.on('close', () => console.log('Kopyalama işlemi tamamlandı'));

okuStream.on('error',(error)=>console.error(error.message));
yazStream.on('error',(error)=>console.error(error.message));

