
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $('#increment-btn').click(function (e) {
            e.preventDefault();
            var inc_value= $('#anzahl-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<10){
                value++;
                $('#anzahl-input').val(value);
            }
        });

        $('#decrement-btn').click(function (e) {
            e.preventDefault();
            var dec_value= $('#anzahl-input').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $('#anzahl-input').val(value);
            }
        });
    });


</script>

