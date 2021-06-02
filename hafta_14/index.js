const express = require("express");
const cors = require('cors')
const mysql = require('mysql');

const pool = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "xpsoes",
    database: "world",
    port: 3306
});

const app = express();
app.use(cors());

app.get('/ulkeler',(req,res)=>{
    pool.getConnection((err, conn) => {
        conn.query("SELECT code,name FROM country ORDER BY name", (err,result,fields)=>{
            conn.release();
            if(err) throw err;
            res.send(result);            
        });
    });
});

app.get('/sehirler/:code',(req,res)=>{
    const ulke_kodu = req.params.code;
    pool.getConnection((err, conn) => {
        conn.query(`SELECT Name, Population FROM city WHERE countryCode='${ulke_kodu}'`, (err,result,fields)=>{
            conn.release();
            if(err) throw err;
            res.send(result);            
        });
    });
});

app.listen(3001, () => console.log("Node.js 3001 port"))