<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#warenkrop').click(function (e) {
        e.preventDefault();
            var geschirr_id  = $(this).closest('#Geschirr_daten').find('#geschirr_id').val();
            var menge = $(this).closest('#Geschirr_daten').find('#anzahl-input').val();

    $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "Post",
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
</script>
