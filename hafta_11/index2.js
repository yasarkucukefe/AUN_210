const url = require('url');
const express = require('express');

const app = express();

app.get('/',(req,res)=>{
    const url_adresi = req.originalUrl;
    const q = url.parse(url_adresi, true);
    const qdata = q.query;
    const url_q = qdata.q ? qdata.q : "";
    const url_p = qdata.p ? qdata.p : "";
    const url_t = qdata.t ? qdata.t : "";
    res.writeHead(200, {'Content-type':'text/html'});
    res.write('<html><head><meta charset="utf-8"></head><body>')
    res.write(`p:${url_p} <br> q:${url_q} <br> t:${url_t}` );
    res.write('</body></html>');
    res.end();
});

app.listen(3001);