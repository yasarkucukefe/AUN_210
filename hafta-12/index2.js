const express = require('express')
const mysql = require('mysql');

const conn = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "xpsoes",
    database: "world",
    port: 3306
});

conn.connect((err) => {
    if(err) throw err;
});

const app = express()

const port = 3000

app.get('/sehirler', (req, res) => {
    res.send("Ülke kodu belirtilmedi...");
})

app.get('/sehirler/:ulke_kodu', (req, res) => {
    console.log(req.params);
    const ulke_kodu = req.params.ulke_kodu;
    //res.send("Sehirleri listeleyeceğiz..."+ ulke_kodu);
    const sql = `SELECT Name FROM city WHERE CountryCode = '${ulke_kodu}'  ORDER BY Name`;
    conn.query(sql, (err,result,fields)=>{
        if(err) throw err;                      
        console.log(result);
        res.send(result);    
    });
})



app.get('/ulkeler', (req, res) => {
    conn.query("SELECT code,name FROM country ORDER BY name", (err,result,fields)=>{
        if(err) throw err;     
        console.log(result);
        res.send(result);
    });
})

app.get('/', (req, res) => {
    res.send('Hello World!')
  })

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})