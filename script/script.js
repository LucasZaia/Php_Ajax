function send() {
    const val = document.getElementById('textArea').value;

    const obj = {
        name: val,
    }


    $.ajax({
        url: "http://localhost/php_Ajax/functions.php",
        type: "POST",
        data: JSON.stringify(obj),
        dataType: 'json',

    }).done((response) => {
        const li = document.getElementById('textArea');


        li.style.border = '2px solid green';

    }).fail((jqXHR, textStatus) => {
        const span = document.getElementById('textArea');


        span.style.border = '2px solid red';

        return false;
    }).always(() => {});

    return false;

}

function buscar() {

    $.ajax({
        url: "http://localhost/php_Ajax/load.php",
        type: "GET",
        dataType: 'json'
    }).done(function(result) {
        const list = document.getElementById("list");
        console.log(result.resultado);

        $('#list').prepend('<li class="list-group-item">' + result.resultado + '</li>');



    })
}