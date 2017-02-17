
jQuery(document).ready(function () {
    jQuery("#submit").click(function () {
        var name = $("#word").text();
        $("#submit").click(function () {
            alert("It works");

            return false;
        });


        $('#get').click(function get() {
            alert("It works");
            $.post('meaning.php'), { word: form.word.value },
    function (output) {
        $('#meaning').html(output).show();
    };

        });


    });
});