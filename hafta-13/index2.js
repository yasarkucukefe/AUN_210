const fs = require("fs");
const http = require("http")

const video_file = "./powder-day.mp4"

http.createServer((req, res) => {
    console.log("Video dosyası streaming...");

    res.writeHead(200, {'Content-Type':'video/mp4'});
    fs.createReadStream(video_file)
        .pipe(res)
        .on("error", console.error);
    
}).listen(3000, () => {console.log("3000 no'lu port üzerinden çalışıyor.")})