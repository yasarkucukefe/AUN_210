const axios = require("axios");

const city = "Istanbul";
const api_key = "90bf1f6964f09d9036c80992c58550d7";

const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${api_key}&units=metric`;

//axios.get(url).then(response => console.log(response));



axios.get(url).then(response => {
    const city = response.data.name;
    const temp = response.data.main.temp;
    console.log(`${city} => ${temp} C`);
});