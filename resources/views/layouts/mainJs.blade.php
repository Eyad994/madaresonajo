<script type="text/javascript">

    window.onload = function () {
        $.ajax({
            url: '{{ route('getMainAdd2',app()->getLocale()) }}',
            method: 'get',
            success: function (data) {
                if (data.active == 1) {
                    $.ajax({
                        url: '{{ route('getMainAdd',app()->getLocale()) }}',
                        method: 'get',
                        success: function (data2) {
                            if (localStorage.getItem("hasCodeRunBefore") === null) {
                                $('#schoolModal').modal('show');
                                $('#data').html(data2);
                                localStorage.setItem("hasCodeRunBefore", true);
                            }
                        }
                    });
                }

            }
        });

    };
    $('.btn_close_modal').on('click', function () {
        $('#schoolModal').modal('hide');
    });

    $(document).ready(function () {

        $('.selectpicker').selectpicker();

        if (initialLoad) {
            $('#schoolModal').modal('show');
        }

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
