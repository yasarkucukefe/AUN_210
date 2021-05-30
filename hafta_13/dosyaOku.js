const fs = require("fs");

fs.readFile("./dosya.txt",(err, data) => console.log(data.toString()));

const dosyaOku = fs.createReadStream("./dosya.txt");

//dosya yazmak

const yazStream = fs.createWriteStream("./yeni.txt");

process.stdin.pipe(yazStream);