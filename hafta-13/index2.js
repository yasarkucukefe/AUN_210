const fs = require("fs");
const http = require("http");

const video_dosya = "./videolar/powder-day.mp4";

http.createServer((req,res) => {
    res.writeHead(200, {'Content-Type': 'video/mp4'});
    fs.createReadStream(video_dosya)
        .pipe(res)
        .on("error",console.error);
}).listen(3000, () => {console.log("Port 3000 streaming ...")});