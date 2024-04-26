const http = require('http');
const fs = require("fs");

console.log("8080 no'lu porttan sunucuya ulaşabilirsiniz.")

http.createServer(function (req, res) {
    console.log(req.url)
    console.log("index.html dosyası okunuyor");
    fs.readFile("index.html", function(err, data){
        //dosya okuma işlemi
        if(err){console.log("Dosya okunurken bir hata oluştu");return;}
        res.writeHead(200, {"Content-type":"text/html"});
        res.write(data)
        res.end();
        console.log("index.html dosyası okundu");
    });
    console.log("Dosya okundu");

  
}).listen(8080);