const fs = require('fs');
const { promisify } = require('util');
const okuKlasor = promisify(fs.readdir);

const gecikme = (saniye=1) => new Promise((resolves) => {setTimeout(resolves, saniye*1000)});

//Promise.race : köşeli parantes içindeki promise'lerden her hangi biri tamamlandığı zaman sonraki then aşamasına geçer.
Promise.race([
    gecikme(2),
    gecikme(3),
    gecikme(1)
]).then(()=>okuKlasor(__dirname))
  .then(console.log);
