var chat = 0;
var array = Array();

function sendChat()
{
    array[chat] = document.getElementById("chat").value;
    chat++;
    document.getElementById("chat").value = "";

    var display = "";

    for (var x=0; x<array.length; x++)
    {
        display += array[x] + "<br/>" + "<br/>";
    }

    document.getElementById("demo").innerHTML = display;

}

function mic(x) {
    x.classList.toggle("bi-mic");
}

function phone(x) {
    x.classList.toggle("bi-telephone-fill");
}

function camera(x) {
    x.classList.toggle("bi-camera-video");
}

