$(document).ready(function() {
    $("#fakultas").change(function(val) {
        const faculty = $(this).val();
        $.ajax({
            url: `/major/by-faculty/${faculty}`
        }).done(data => {
            $("#jurusan").empty();
            $.each(data, (key, val) => {
                $('#jurusan')
                    .append($("<option></option>")
                        .attr("value", val.id)
                        .text(val.nama_prodi));
            })
        })
    });
})