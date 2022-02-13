const fs = require("fs");
const okuStream = fs.createReadStream("dosya_1.txt");
const yazStream = fs.createWriteStream("dosya_2.txt");
okuStream.pipe(yazStream);

