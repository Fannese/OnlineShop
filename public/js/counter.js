

    $(document).ready(function() {
        $("#increment-btn").click(function (e) {
            e.preventDefault();
            var inc_value= $(this).closest("#Geschirr_daten").find("#menge").val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<10){
                value++;
                $(this).closest("#Geschirr_daten").find("#menge").val(value);
            }
        });

        $("#decrement-btn").click(function (e) {
            e.preventDefault();
            var dec_value= $(this).closest("#Geschirr_daten").find("#menge").val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).closest("#Geschirr_daten").find("#menge").val(value);
            }
        });

         $(".mengeUpdate").click(function (e) {
            e.preventDefault();
            var geschirr_id=  $(this).closest("#Geschirr_daten").find("#geschirr_id").val();
            var menge = $(this).closest("#Geschirr_daten").find("#menge").val();
            data={
            'geschirr_id': geschirr_id,
            'menge': menge,
        },
            $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
            method: "POST",
            url: "update-menge",
            data: data,
            success: function (response) {
               window.location.reload();

            }
        });
        });
            $(".mengeUpdate").hover(function (e) {
                $(this).css("background-color", "green");

                    }, function(){
                            $(this).css("background-color", "white");
                    });

    });




