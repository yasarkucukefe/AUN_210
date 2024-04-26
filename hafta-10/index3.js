const http = require('http');
const fs = require("fs") 

console.log("8080 no'lu porttan sunucuya ulaşabilirsiniz.")

http.createServer(function (req, res) {
    console.log(req.url)
    console.log("index.html dosyası okunuyor");

    let html_dosya = "index.html"
    if(req.url == "/ders1"){
        html_dosya = "ders1.html";
    }else if(req.url == "/ders2"){
        html_dosya = "ders2.html";
    }

    fs.readFile(html_dosya, function(err, data){
        //dosya okuma işlemi
        if(err){console.log("Dosya okunurken bir hata oluştu");return;}
        res.writeHead(200, {"Content-type":"text/html"});
        res.write(data)
        res.end();
        console.log(html_dosya + " dosyası okundu");
    });
    console.log("Dosya okundu");

  
}).listen(8080);