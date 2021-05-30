const fs = require("fs");
const { promisify } = require("util");
const http = require("http");
const videoFile = './video/powder-day.mp4';

const dosyaBoyut = promisify(fs.stat);

http.createServer(async (req, res) => {
    const {size} = await dosyaBoyut(videoFile);
    const range = req.headers.range;
    if(range){//Videonun belirli bir noktasına gitmek istiyor istemci
        console.log(range);
        let [basla, son] = range.replace(/bytes=/, '').split('-');
        basla = parseInt(basla, 10);
        son = son ? parseInt(son, 10) : size-1;
        res.writeHead(206, {
            'Content-Range': `bytes ${basla}-${son}/${size}`,
            'Accept-Ranges':'bytes',
            'Content-Length':(son-basla)+1,
            'Content-Type':'video/mp4'
        });
        fs.createReadStream(videoFile, {basla, son}).pipe(res).on('error',console.error);
    }else{
        res.writeHeader(200, {'Content-Type':'video/mp4', 'Content-Length':size});
        fs.createReadStream(videoFile)
            .pipe(res)
            .on('error',console.error);
    }    
}).listen(3001, ()=>console.log('Video dosyası http://localhost:3001 adresinden erişilebilir.'));
