const axios = require('axios');

// API key from OpenWeatherMap
const apiKey = '90bf1f6964f09d9036c80992c58550d7';

// Array of cities
const cities = ['London', 'Paris', 'New York', 'Tokyo'];

// Function to fetch temperature for a city
async function getTemperature(city) {
    try {
        console.log(city);
        const response = await axios.get(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`);
        const temperature = response.data.main.temp;
        return temperature;
    } catch (error) {
        console.error('Error fetching temperature:', error);
        return null;
    }
}

// Function to fetch temperatures for all cities
async function getTemperatures() {
    const temperatures = await Promise.all(cities.map(city => getTemperature(city)));
    return temperatures;
}

// Retrieve temperatures for all cities
getTemperatures().then(temperatures => {
    temperatures.forEach((temperature, index) => {
        console.log(`${cities[index]}: ${temperature}°C`);
    });
});
