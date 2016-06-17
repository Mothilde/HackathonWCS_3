function meteo() {
    //debugger
    var apikey = "a156c7d9a0d81b1b893f8e7be46a7e6d";
    var city = document.getElementById("searchAutoComplete").value;
    console.log(city);
    var link = "http://api.openweathermap.org/data/2.5/weather?q="+city+"&APPID="+apikey+"&units=metric";

    var req = new XMLHttpRequest();

    req.open('GET', link, true);

    req.onreadystatechange = function (aEvt) {
        if(req.readyState == 4) {
            if(req.status == 200) {
                var met = JSON.parse(req.responseText);
                document.getElementById("Weather").innerHTML =  "<br><h3>Meteo de "+ met['name'] +
                    "</h3><br><p>Temperature Actuelle : <b>"+ met['main']['temp']+ " C°</b><br>Min : "+ met['main']['temp_min'] +
                    " C°<br>Max : "+ met['main']['temp_max'] + " C°</p>";
            } else {
                document.getElementById("Weather").innerHTML = " Not found ";
            }
        }
    }
    city = " ";
    req.send(null);

};