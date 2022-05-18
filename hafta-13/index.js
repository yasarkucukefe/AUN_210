const fs = require("fs");
const http = require("http");

const video_dosya = "./videolar/powder-day.mp4";

http.createServer((req,res) => {
    fs.readFile(video_dosya, (err, data) => {
        if(err) {
            res.writeHead(404, {'Content-Type': 'text/html'});
            res.end("404 not found");
            return;
        }
        res.writeHead(200, {'Content-Type': 'video/mp4'});
        res.end(data);
    })
}).listen(3001, () => {console.log("Port 3001 çalışıyor...")});
