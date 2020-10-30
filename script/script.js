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

    }).done(() => {
        const text = document.querySelectorAll("#TextArea");
        text.style.border = "1px solid green";

    })
}