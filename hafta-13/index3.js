const fs = require("fs");

const video_file = "./powder-day.mp4";
const yeni_file = "./yeni.mp4";

const okuStream = fs.createReadStream(video_file);
const yazStream = fs.createWriteStream(yeni_file);

okuStream.pipe(yazStream);