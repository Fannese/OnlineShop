<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('.razorpay_btn').click(function (e) {
            e.preventDefault();
            var vorname = $('.vorname').val();
            var name = $('.name').val();
            var email = $('.email').val();
            var straße = $('.straße').val();
            var plz = $('.plz').val();
            var stadt = $('.stadt').val();
            var land = $('.land').val();
            var telephon_nummer = $('.telephon_nummer').val();

if( vorname!='' || name!='' ||email!='' || straße!='' || plz!='' || stadt!='' || land!='' || telephon_nummer!=''){
    return false;
}
else{
    var data= {
        'vorname':vorname,
        'name':name,
        'email':email,
        'straße':straße,
        'plz':plz,
        'stadt':stadt,
        'land':land,
        'telephon_nummer':telephon_nummer,

    }
    $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
$.ajax({
    method: "post",
    url: "payment",
    data: "data",
    success: function (response) {

    }
});
}

        });
    });
</script>
