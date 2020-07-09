<script type="text/javascript">

    $(document).ready(function () {

        $('#search_select').on('change', function (e) {
            e.preventDefault();
            var value = $(this).val();

            if (value === 'location') {

                $('.schoolClass').css('display', 'none');
                $('.schoolType').css('display', 'none');

                $('.location').css('display', 'block');
            } else if (value === 'fees') {

                $('.location').css('display', 'none');
                $('.schoolType').css('display', 'none');

                $('.schoolClass').css('display', 'block');

            } else if (value === 'school_type') {

                $('.location').css('display', 'none');
                $('.schoolClass').css('display', 'none');

                $('.schoolType').css('display', 'block');

            } else if (value === 'name') {

                $('.location').css('display', 'none');
                $('.schoolClass').css('display', 'none');

                $('.schoolType').css('display', 'none');
            }
        })

    });

    $('#city_id').on('change', function () {
        var value = $(this).val();
        $.ajax({
            url: '/getRegions/' + value,
            method: 'get',
            success: function (result) {
                $('#region_id option:not(:first)').remove();
                $.each(result, function (index, value) {
                    $('#region_id').append("<option value='" + value.id + "'>" + value.area_name_ar + "");
                });

                $('#region_id').removeAttr('disabled');

               /* var value =
                    $.ajax({
                    url: '/getRegions/' + value,
                    method: 'get',
                    success: function (result) {
                        var schoolId =
                                                $('#region_id option:not(:first)').remove();
                        $.each(result, function (index, value) {
                            if (schoolId == value.id)
                                $('#region_id').append("<option value='" + value.id + "' selected>" + value.area_name_ar + "");
                            else
                                $('#region_id').append("<option value='" + value.id + "'>" + value.area_name_ar + "");
                        });

                        $('#region_id').removeAttr('disabled');
                    }
                });*/
            }
        });
    });

</script>