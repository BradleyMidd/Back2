function InitAJAX()
{
    var objxml;
    var IEtypes = ["Msxml2.XMLHTTP.6.0", "Msxml2.XMLHTTP.3.0", "Microsoft.XMLHTTP"];

    try
    {
        // Probeer het eerst op de "moderne" standaardmanier
        objxml = new XMLHttpRequest();
    }
    catch (e)
    {
        // De standaardmanier werkte niet, probeer oude IE manieren
        for (var i = 0; i < IEtypes.length; i++)
        {
            try
            {
                objxml = new ActiveXObject(IEtypes[i]);
            }
            catch (e)
            {
                continue;
            }
        }
    }

    // Lever het XHR object op
    return objxml;
}

function doeKlik(art)
{
        // Maak een XHR object
        var xmlHttp = InitAJAX();

        // Wat moet er gebeuren bij statuswijzigingen?
        xmlHttp.onreadystatechange = function () {
            // Is het request al helemaal klaar en OK?
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                // Lees de tekst die is ontvangen
                var result = xmlHttp.responseText;

                document.getElementById('div').innerHTML = result;
            }
        }

        // Verstuur het request
        xmlHttp.open("GET", "opdracht3_verwerk.php?art=" + art, true);
        xmlHttp.send(null);
}