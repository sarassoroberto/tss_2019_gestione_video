$(document).ready(function () {

    $('#selectAllAutori').on('change', function (evt) {

        console.log(evt.type, evt.currentTarget.checked);
        $('.chk_id_autore').attr('checked', evt.currentTarget.checked)
    })
});