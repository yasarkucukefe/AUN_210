const http = require('http');


console.log("8080 no'lu porttan sunucuya ulaşabilirsiniz.")

http.createServer(function (req, res) {
    console.log("Web sunucusu başlatılıyor.")
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.write("<h1>Node.js</h1>")
  res.write("<h2>Sunucu taraflı programalam için kullanılır.</h2>")
  res.end('<h3>JavaScript dilini kullanır.</h3>');
}).listen(8080);

// dosyayı çalıştırmak için: node index.js