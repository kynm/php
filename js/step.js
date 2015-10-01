    jQuery().ready(function() {
        var v = jQuery("#basicform").validate({
            rules: {
                user_name: {
                    required: true,
                    minlength: 2,
                    maxlength: 16
                },
                birth: {
                    required: true,
                    date: true
                },
                email: {
                    required: true,
                    regx: /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i,
                    minlength: 2,
                    email: true,
                    maxlength: 100,
                },
                phone: {
                    required: true,
                    number: true,
                    minlength: 2,
                    maxlength: 16
                },
                skype: {
                    required: true,
                    minlength: 2,
                    maxlength: 16
                },
            },
            errorElement: "span",
            errorClass: "help-inline-error",
        });

        $(".open1").click(function() {
            if (v.form()) {
                $(".frm").hide("fast");
                $("#sf2").show("slow");
            }
        });

        $(".open2").click(function() {
            if (v.form()) {
                $(".frm").hide("fast");
                $("#sf3").show("slow");
            }
        });

        $(".open3").click(function() {
            if (v.form()) {
                $("#loader").show();
                 setTimeout(function(){
                     $("#basicform").html('<h2>Thanks for your time.</h2>');
                 }, 1000);
                return false;
            }
        });

        $(".back2").click(function() {
            $(".frm").hide("fast");
            $("#sf1").show("slow");
        });

        $(".back3").click(function() {
            $(".frm").hide("fast");
            $("#sf2").show("slow");
        });

        $.validator.addMethod("regx", function(value, element, regexpr) {          
            return regexpr.test(value);
        }, "change email");
        $(document).on('click', '.btn-add', function(){
            var target = $(this).attr('target-id');
            var controlForm = $('.' + target);
            var currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('').removeAttr('disabled');
            controlForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="glyphicon glyphicon-minus"></span>');
        }).on('click', '.btn-remove', function(e)
        {
            var target = $(this).attr('target-id');
            var controlForm = $('.' + target);
            var maxRecommend = controlForm.attr('max-items') + 1;
            if (controlForm.children().length <= maxRecommend) {
                controlForm.children().last().find('input').val('').removeAttr('disabled');
            }
            $(this).parents('.entry:first').remove();
            e.preventDefault();
            return false;
        });
        $('#datetimepicker1').datetimepicker('yyyy-mm-dd');
        var count_skill = 10;
        var count_technology = 10;
        $(document).on('click', '.btn-add-technology-skill', function() {
            var parent = $(this).parent();
            technology_count = parent.data('id');
            parent.append('<div class="skill-technology"><input type="checkbox" class="check-box"><input disabled type="input" name="technology[' + technology_count + '][skill][' + count_skill + '][name]" value=""><input disabled type="input" name="technology[' + technology_count + '][skill][' + count_skill + '][value]"></input><button type="button" class="remove btn-danger">remove</button></div>');
            count_skill ++;
        });
        $(document).on('click', '.remove', function() {
            $(this).parent().remove();
        });
        $(document).on('click', '.check-box', function() {
            var parent = $(this).parent();
            var checked = $(this).is(':checked');
            if (checked) {
                parent.children("input[type='input']").prop('disabled', false);
                parent.children("input[type='hidden']").prop('disabled', false);
            } else {
                parent.find("input[type='input']").prop('disabled', true);
                parent.find("input[type='hidden']").prop('disabled', true);
            }
        });
        $('.btn-add-technology').on('click', function(){
            $(this).parent().parent().append('<div class="form-group" data-id="'+ count_technology +'"><input type="checkbox" class="check-box"><input disabled type="input" name="technology[' + count_technology + '][name]" value=""><input disabled type="input" name="technology[' + count_technology + '][value]"></input><button class="btn btn-success btn-add-technology-skill skill-technology" type="button"><span class="glyphicon glyphicon-plus"></span></button></br>');
            count_technology ++;
        });
    });