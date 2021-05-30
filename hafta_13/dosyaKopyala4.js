const fs = require("fs");

const okuStream = fs.createReadStream("./video/powder-day.mp4");
const yazStream = fs.createWriteStream("./kopyala/yeniKopya.mp4");

okuStream.pipe(yazStream);