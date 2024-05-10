const fs = require("fs");
const http = require("http")

const video_file = "./powder-day.mp4"

http.createServer((req, res) => {
    console.log("Video dosyası");
    fs.readFile(video_file, (err, data) => {
        if(err){res.end('Dosya okuma hatası.'); return;}
        res.writeHead(200, {'Content-Type':'video/mp4'});
        res.end(data);
    })

}).listen(3001, () => {console.log("3001 no'lu port üzerinden çalışıyor.")})