const fs = require('fs');

const okuStream = fs.createReadStream("./dosya.txt");

okuStream.pipe(process.stdout);
//==
//fs.readFile("./dosya.txt",(err,data)=>console.log(data.toString()));