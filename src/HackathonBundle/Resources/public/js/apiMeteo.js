function meteo() {
    //debugger
    var apikey = "a1763e2ff73afbcfb08b54de766913d2";
    var city = document.getElementById("searchAutoComplete").value;
    var link = "http://api.openweathermap.org/data/2.5/weather?q="+city+"&APPID="+apikey+"&units=metric";

    var req = new XMLHttpRequest();

    req.open('GET', link, true);

    req.onreadystatechange = function (aEvt) {
        if(req.readyState == 4) {
            if(req.status == 200) {
                var met = JSON.parse(req.responseText);
                document.getElementById("APIMeteo").innerHTML =  "<br><h3>Meteo de "+ met['name'] +
                    "</h3><br><p>Temperature Actuelle : <b>"+ met['main']['temp']+ " C°</b><br>Min : "+ met['main']['temp_min'] +
                    " C°<br>Max : "+ met['main']['temp_max'] + " C°</p>";
            } else {
                document.getElementById("APIMeteo").innerHTML = " Not found ";
            }
        }
    }
    city = " ";
    req.send(null);

};

