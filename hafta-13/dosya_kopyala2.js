const fs = require("fs");

const okunacak_dosya = "./videolar/powder-day.mp4";
const yazilacak_dosya = "./kopyala/yeni_video.mp4";

const okuStream = fs.createReadStream(okunacak_dosya,{highWaterMark:100000});

const yazStream = fs.createWriteStream(yazilacak_dosya);

okuStream.on("data", (parca) => {
    yazStream.write(parca)
});

okuStream.on("end", () => {
    console.log("Kopyalama işlem tamamlandı");
    yazStream.end();
});

okuStream.on("error", (err) => {console.log(err)});