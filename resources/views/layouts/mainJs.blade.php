<script type="text/javascript">
    function clearData() {
        window.clipboardData.setData('text', '')
    }
    function cldata() {
        if (clipboardData) {
            clipboardData.clearData();
        }
    }
    setInterval("cldata();", 1000);

    window.onload = function () {
        if (localStorage.getItem("hasCodeRunBefore") === null) {
            $('#schoolModal').modal('show');
            localStorage.setItem("hasCodeRunBefore", true);
        }
    };
    $(document).ready(function () {
        /*if (initialLoad) {
            $('#schoolModal').modal('show');
        }*/


        $('#search_select').on('change', function (e) {

            var searchText = $('#search_text').val();
            var value = $(this).val();

            // location
            if (value == 2) {

                $('.schoolClass').css('display', 'none');
                $('.schoolType').css('display', 'none');

                $('.location').css('display', 'block');
                // fees
            } else if (value == 4) {

                $('.location').css('display', 'none');
                $('.schoolType').css('display', 'none');

                $('.schoolClass').css('display', 'block');
                // school_type
            } else if (value == 3) {

                $('.location').css('display', 'none');
                $('.schoolClass').css('display', 'none');

                $('.schoolType').css('display', 'block');
                // name
            } else if (value == 1) {

                $('.location').css('display', 'none');
                $('.schoolClass').css('display', 'none');

                $('.schoolType').css('display', 'none');
            }
        });

    });

    $('#city_id').on('change', function () {
        var value = $(this).val();

        $.ajax({
            url: '/{{ app()->getLocale() }}/getRegions/' + value,
            method: 'get',
            success: function (result) {
                console.log(result);
                $('#region_id option:not(:first)').remove();
                $.each(result, function (index, value) {
                    $('#region_id').append("<option value='" + value.id + "'>" + value.area_name_ar + "");
                });

                $('#region_id').removeAttr('disabled');
            }
        });
    });


</script>
