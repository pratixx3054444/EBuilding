const container=document.querySelector('.container');
const search=document.querySelector('.search-box button');
const weatherbox=document.querySelector('.weather-box');
const weatherDetails=document.querySelector('.wrather-details');

    if(navigator.getGamepads()){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showExactPosition);
        }
        else{
            x.innerHTML="Not supported";
        }
        function showExactPosition(position){                        
            const APIKey="77a10ed7962307bd71999f1a21c153e7";
            const lat=position.coords.latitude;
            const long=position.coords.longitude;
            console.log(lat+ " "+ long);
        fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${long}&appid=${APIKey}`).then(response=>response.json()).then(json=>{
            const image=document.querySelector('.weather-box img');
            const temprature=document.querySelector('.weather-box .temprature');

            console.log(json.weather[0].main);
            switch (json.weather[0].main){
                case 'Clear':
                    image.src='./images/Clear.jpg';
                    console.log("Clear");
                    break;
                case 'Rain':
                    image.src='./images/Rain.jpg';
                    console.log("rain");
                    break;
                case 'Snow':
                    image.src='./images/Snow.jpg';
                    console.log("rain");
                    break;
                case 'Mist':
                    image.src='./images/Mist.png';
                    console.log("rain");
                    break;  
                case 'Haze':
                    image.src='./images/Snow.jpg';
                    console.log("rain");
                    break;
                case 'Clouds':
                    image.src='./images/Cloud.jpg';
                    console.log("rain");
                    break;
                case 'Smoke':
                    image.src='./images/Cloud.jpg';
                    break;
                default :
                    image.src='./images/Cloud.jpg';
                    console.log("rain");
            }
            var temp=parseInt(json.main.temp);
           temprature.innerHTML="&emsp;&emsp;&emsp;<b>"+parseInt((temp/10))+" °C</b> "+`${json.weather[0].description}`+"&emsp;&emsp;&emsp;<b>"+`${json.main.humidity}%</b> Humidity`+"&emsp;&emsp;&emsp;"+`<b>${parseInt(json.wind.speed)}Km/h </b>Wind Speed`;

        });
    }


}



