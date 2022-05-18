const fs = require("fs");

const okunacak_dosya = "./videolar/powder-day.mp4";
const yazilacak_dosya = "./kopyala/yeni_video.mp4";

const okuStream = fs.createReadStream(okunacak_dosya,{highWaterMark:100000});

const yazStream = fs.createWriteStream(yazilacak_dosya);

okuStream.pipe(yazStream);

okuStream.on("end", () => {console.log("Kopyalama işlem tamamlandı");});