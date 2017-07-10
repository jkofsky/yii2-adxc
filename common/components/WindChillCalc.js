function decideConvert(temp, ws)
{
    temp = parseFloat(document.Convert.Temp.value);
    ws = parseFloat(document.Convert.windspeed.value);

    if (document.Convert.windunit[1].checked)
    {
        ws = convertktstomph(ws);
        ws1 = convertktstomps(ws);

        if (ws < 3)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds less than 2.6 Knots');
            document.Convert.windspeed.value = "";
            return 0;
        }
        if (ws > 110)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds greater than 95.6 Knots');
            document.Convert.windspeed.value = "";
            return 0;
        }
    }

    if (document.Convert.windunit[2].checked)
    {
        ws = convertmpstomph(ws);
        ws1 = document.Convert.windunit[2].value;

        if (ws < 3)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds less than 1.3 meters/second');
            document.Convert.windspeed.value = "";
            return 0;
        }
        if (ws > 110)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds greater than 49.2 meters/second');
            document.Convert.windspeed.value = "";
            return 0;
        }

    }

    if (document.Convert.windunit[3].checked)
    {
        ws = convetkphtomph(ws);
        ws1 = convertkphtomps(ws);

        if (ws < 3)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds less than 4.8 kilometers/hour');
            document.Convert.windspeed.value = "";
            return 0;
        }
        if (ws > 110)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds greater than 177 kilometers/hour');
            document.Convert.windspeed.value = "";
            return 0;
        }
    }

    if (document.Convert.tempunit[0].checked)
    {
        var ws1 = convertmphtomps(ws);
        var temp1 = convertFtoC(temp);

        if (ws < 3)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds less than 3 miles/hour');
            document.Convert.windspeed.value = "";
            return 0;

        }
        if (ws > 110)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds greater than 110 miles/hour');
            document.Convert.windspeed.value = "";
            return 0;

        }


        if (temp > 50)
        {
            alert('A Wind Chill value cannot be calculated for temperatures greater than 50 degrees Fahrenheit.');
            document.Convert.Fahr.value = "";
            document.Convert.Cels.value = "";
            document.Convert.Temp.value = "";
        } else
        {
            document.Convert.Fahr.value = roundOff(windChill(temp, ws));
            var C = parseFloat(document.Convert.Fahr.value);
            document.Convert.Cels.value = roundOff(convertFtoC(C));
            document.Convert.Watts.value = roundOff(WPM2(temp1, ws1));
        }
    }

    if (document.Convert.tempunit[1].checked)
    {
        var F = convertCtoF(temp);
        var ws1 = convertmphtomps(ws);

        if (ws < 3)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds less than 3 miles/hour');
            document.Convert.windspeed.value = "";
            return 0;

        }

        if (ws > 110)
        {
            alert('A Wind Chill value cannot be calculated for wind speeds greater than 110 miles/hour');
            document.Convert.windspeed.value = "";
            return 0;

        }

        if (F > 50)
        {
            alert('A Wind Chill value cannot be calculated for temperatures greater than 10.0 degrees Celsius.');
            document.Convert.Fahr.value = "";
            document.Convert.Cels.value = "";
            document.Convert.Temp.value = "";
        } else
        {
            document.Convert.Fahr.value = roundOff(windChill(F, ws));
            document.Convert.Cels.value = roundOff((convertFtoC(windChill(F, ws))));
            document.Convert.Watts.value = roundOff(WPM2(temp, ws1));
        }
    }
}

function convertFtoC(Fahr)
{
    var Celsius;
    Celsius = .55556 * (Fahr - 32);
    return Celsius;
}

function convertCtoF(Cels)
{
    var Fahr;
    Fahr = 1.8 * Cels + 32;
    return Fahr;
}

function convertktstomph(knots)
{
    var mph;
    mph = 1.1507794 * knots;
    return mph;
}

function convertmpstomph(mps)
{
    var mph;
    mph = 2.23694 * mps;
    return mph;
}

function convertmphtomps(mph)
{
    var ws1;
    ws1 = 0.44704 * mph;
    return ws1;
}

function convertktstomps(knots)
{
    var ws1;
    ws1 = 0.5144444 * knots;
    return ws1;
}

function convetkphtomph(kph)
{
    var mph;
    mph = 0.621371 * kph;
    return mph;
}

function convertkphtomps(kph)
{
    var ws1;
    ws1 = 0.277778 * kph;
    return ws1;
}

function windChill(F, mph)
{
    var wChill;

    wChill = 35.74 + .6215 * F - 35.75 * Math.pow(mph, 0.16) + 0.4275 * F * Math.pow(mph, 0.16);
    return wChill;
}

function WPM2(C, mps)
{
    var Watts;

    Watts = (12.1452 + 11.6222 * Math.sqrt(mps) - 1.16222 * mps) * (33 - C);
    return Watts;

}
function getAns(temp)
{
    return temp;
}

function roundOff(value)
{
    value = Math.round(10 * value) / 10;
    return value;
}

function setToNull()
{
    document.Convert.Fahr.value = "";
    document.Convert.Cels.value = "";
    document.Convert.windspeed.value = "";
    document.Convert.Temp.value = "";
    document.Convert.Watts.value = "";
}
	