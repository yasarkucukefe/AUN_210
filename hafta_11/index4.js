const url = require('url');
const express = require('express');
const jwt = require('jsonwebtoken');

const app = express();

app.get('/',(req,res)=>{
    const url_adresi = req.originalUrl;
    const q = url.parse(url_adresi, true);
    const qdata = q.query;
    const url_q = qdata.q ? qdata.q : "";
    console.log(url_q);
    const json_obj = token_cozum(url_q);
    
    res.writeHead(200, {'Content-type':'text/html'});
    res.write('<html><head><meta charset="utf-8"></head><body>')
    res.write(`ders:${json_obj.ders} <br> tarih:${json_obj.tarih}` );
    res.write('</body></html>');
    res.end();
  
});

const token_cozum = (token) => {
    const super_gizli_anahtar = 'JKDI_DPOlowy8273*/dcdadcd';
    return jwt.verify(token, super_gizli_anahtar);
}

app.listen(3001);