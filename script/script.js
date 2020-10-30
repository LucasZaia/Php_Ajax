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

    });
}