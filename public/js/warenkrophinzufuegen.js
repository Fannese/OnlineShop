
  $(document).ready(function() {
    $('#warenkrop').click(function (e) {
        e.preventDefault();
            var geschirr_id  = $(this).closest('#Geschirr_daten').find('#geschirr_id').val();
            var menge = $(this).closest('#Geschirr_daten').find('#menge').val();

    $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "Post",
        url: "/warenkrop-hinzufuegen",
        data: {
            'geschirr_id': geschirr_id,
            'menge': menge,
        },
        success: function (response) {
            alert(response.status);
        }
    });
    });
});

