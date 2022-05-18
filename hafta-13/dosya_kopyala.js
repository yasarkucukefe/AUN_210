const fs = require("fs");

const okunacak_dosya = "./videolar/powder-day.mp4";

const okuStream = fs.createReadStream(okunacak_dosya,{highWaterMark:10000});

okuStream.on("data", (parca) => {
    console.log("Yeni data parçası geldi. Uzunluk: "+parca.length);
    console.log(parca)
});

okuStream.on("end", () => {console.log("Okuma tamamlandı")});

okuStream.on("error", (err) => {console.log(err)});