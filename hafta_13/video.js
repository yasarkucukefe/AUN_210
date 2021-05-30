const fs = require("fs");
const http = require("http");
const videoFile = './video/powder-day.mp4';

http.createServer((req, res) => {
    console.log("basla");
    console.log(new Date());
    fs.readFile(videoFile, (error, data)=>{
        if(error){
            res.writeHeader(404,{'Content-Type':'html/text'});
            res.end("Video dosyası bulunamadı");
            return;
        }
        res.writeHeader(200, {'Content-Type':'video/mp4'});
        res.end(data);
        console.log("okundu");
        console.log(new Date());
    });
}).listen(3001, ()=>console.log('Video dosyası http://localhost:3001 adresinden erişilebilir.'));
