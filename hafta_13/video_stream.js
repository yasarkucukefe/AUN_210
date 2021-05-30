const fs = require("fs");
const http = require("http");
const videoFile = './video/powder-day.mp4';

http.createServer((req, res) => {
    res.writeHeader(200, {'Content-Type':'video/mp4'});
    fs.createReadStream(videoFile)
        .pipe(res)
        .on('error',console.error);
}).listen(3001, ()=>console.log('Video dosyası http://localhost:3001 adresinden erişilebilir.'));
