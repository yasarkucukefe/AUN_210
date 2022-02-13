
const express = require('express');
const app = express();
const bodyParser = require('body-parser');
var cors = require('cors')
app.use(cors())

app.use(bodyParser.urlencoded({ extended: false }))

app.get('/', function (req, res) {
  console.log(req.query.data);
  
  let nasilsin_sorular = [
    'naber',
  ];

  let suan_saat_kac_sorular = [
    'şuan saati soyler misin'
  ];
  
  let nasilsin_sorular_cevap = [
    'çok iyiyim'
  ];

  if(nasilsin_sorular.includes(req.query.data)) {
     res.send(nasilsin_sorular_cevap[ Math.floor(Math.random() * nasilsin_sorular_cevap.length)]);
  } else if(suan_saat_kac_sorular.includes(req.query.data)) {
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds(); time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    res.send('saat:'+time);
  }
  
  else {
    res.send('Sorunun cevabını bilememekteyim.');
  } 



  res.end();
});

app.listen(8080, function () {
  console.log('Sunucu başlatıldı...');
});


