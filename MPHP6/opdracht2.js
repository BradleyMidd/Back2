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

function doeKlik(str)
{
    if(str.length == 0)
    {
        document.getElementById('div').innerHTML = "";
        return;
    }

    else {

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
        xmlHttp.open("GET", "opdracht2.php?wp=" + str, true);
        xmlHttp.send(null);
    }
}


function zoeken() {
    if(document.getElementById('div').innerHTML.length == 0)
    {
        document.getElementById('div').innerHTML = "";
        return;
    }

    else {

        // Maak een XHR object
        var xmlHttp = InitAJAX();
        var str = document.getElementById('div').innerHTML;

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
        xmlHttp.open("GET", "opdracht2_1.php?wk=" + str, true);
        xmlHttp.send(null);
    }
}
