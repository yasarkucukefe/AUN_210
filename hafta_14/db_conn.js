const mysql = require('mysql');

const conn = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "xpsoes",
    database: "world",
    port: 3306
});

/*
conn.connect((err) => {
    if(err) throw err;
    console.log("Mysql veritabanına başarıyla bağlandı.");
});
*/

conn.connect((err)=>{
    if(err) throw err;
    conn.query("SELECT code,name FROM country ORDER BY name", (err,result,fields)=>{
        if(err) throw err;
        console.log(result);
        conn.end();
    });
});

