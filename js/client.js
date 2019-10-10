document.addEventListener("DOMContentLoaded", function () {
    var output = document.getElementById('output');
    getData();   
});


function getData() {
    request = new XMLHttpRequest();
    request.open('GET', 'js/filex.json');
    request.setRequestHeader('Content-type', 'application-json; charset=utf-8');
    request.send();

    request.addEventListener('load', function () {
        if (request.readyState == 4 && request.status == 200) {
            let data = JSON.parse(request.response);
            output.innerHTML = 'Данные успешно получены! <br><hr><br>';
            for (let key in data) {
                output.innerHTML += key + ' : ' + data[key] + '<br>';
            }
        } else {
            let answer = confirm('Вы смирились с неудачей?');
            if (!answer) {
                getData();
            }

        }
    });
}
