const fs = require("fs");
const { promisify } = require("util");
const http = require("http");
const videoFile = './video/powder-day.mp4';

const dosyaBoyut = promisify(fs.stat);

http.createServer(async (req, res) => {
    const {size} = await dosyaBoyut(videoFile);
    res.writeHeader(200, {'Content-Type':'video/mp4', 'Content-Length':size});
    fs.createReadStream(videoFile)
        .pipe(res)
        .on('error',console.error);
}).listen(3001, ()=>console.log('Video dosyası http://localhost:3001 adresinden erişilebilir.'));
