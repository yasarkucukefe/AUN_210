const express = require('express')
const jwt = require('jsonwebtoken');
const formidable = require('formidable');

const app = express()
const port = 3000

const gizli_anahtar = "WIEKDAKDPoD93929231"; // gizli olması gerekir. Koda yazılmaz.

app.use(express.static('public')); // public klasöründe yer alan dosyaları servis etmek için.


app.get("/jwt", async(req, res, next) => {

    const token = req.query.jwt;

    const dogrula = jwt.verify(token, gizli_anahtar);
    if(dogrula){
        res.send("JWT Token geçerli.")
    }else{
        res.send("Hatalı JWT kodu.");
    }

});

app.post("/jwt", async(req, res, next) => {
    const form = new formidable.IncomingForm();
    form.parse( req, function(err, fields, files){
        if(err){res.send("Form hatası"); res.end()}
        const okulNo = fields.okulNo;
        const email = fields.email;

        let data = {
            okul_no: okulNo,
            ePosta: email
        }

        console.log(data);
        const token = jwt.sign(data, gizli_anahtar);

        res.send(token);
           
    })
})

app.delete("/user", (req, res) => {
    res.send("DELETE methodu ile gönderilen işlem yapılıyor...");
})


app.get("/user", (req, res) => {
    res.send("GET ile gönderilen parametreler işleniyor...");
})

app.post("/user", (req, res) => {
    res.send("POST ile gönderilen parametreler işleniyor...");
})


// https://jwt.io/introduction
// JWT: JSON Web Token






app.get('/', (req, res) => {
  res.send('Hello World!')
})

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})