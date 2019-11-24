function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#gambar_').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function show_btn() {
    var save_btn = document.getElementById("save_btn");
    if (save_btn.style.display === "none") {
        save_btn.style.display = "block";
    }
}

$('#bio').each(function() {
    this.setAttribute('style', 'height:' + (this.scrollHeight) + "px; overflox-y: hidden;");
}).on('input', function() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + "px";
});

$('#bio').click(function () {
    $('#bio').focus();
});

$('#bio').focus(function() {
    $(this).css({"border": "1px solid grey"});
});
$('#bio').blur(function() {
    $(this).css({"border": "none"});
});