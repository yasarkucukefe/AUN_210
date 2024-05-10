const axios = require("axios");
const http = require("http")

const api_key = "90bf1f6964f09d9036c80992c58550d7";

const sehirler = ["Ankara","Istanbul","Izmir","Bursa","Antalya"];

const getSicaklik = async (sehir) => {
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${sehir}&appid=${api_key}&units=metric`;
    try{
        const response = await axios.get(url);
        const city = response.data.name;
        const temp = response.data.main.temp;
        return {city, temp}
    }catch (error) {
        console.log(error)
    }
}


const getSicakliklar = async() => {
    const sicakliklar = await Promise.all(sehirler.map(sehir => getSicaklik(sehir)));
    return sicakliklar;
}

http.createServer((req, res) => {
    res.writeHead(200, {'Content-Type':'application/json'})
    getSicakliklar().then(temperatures => {
        console.log(temperatures);
        res.write(JSON.stringify(temperatures));
        res.end();
    })
}).listen(3000, () => {console.log("3000 no'lu port üzerinden çalışıyor.")})






