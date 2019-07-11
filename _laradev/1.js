

$(function () {

    var hash = document.location.hash;
    if (hash) {
        $('.nav-tabs a[href="' + hash + '"]').tab('show');
    }

// Change hash for page-reload
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        history.pushState(null,null, e.target.hash);
    });

    if ($('.has-error').length) {
        $('.has-error').each(function () {
            var tabId = '#'+$(this).closest('.tab-pane').attr('id');
            $('li a[href="'+tabId+'"] i').removeClass('hide');
        });

        var first = $('.has-error:first').closest('.tab-pane').attr('id');
        $('li a[href="#'+first+'"]').tab('show');
    }


    $('.5ce4f707603b8-delete').unbind('click').click(function() {

        swal({
            title: "Вы уверены, что хотите удалить эту запись?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Подтвердить",
            showLoaderOnConfirm: true,
            cancelButtonText: "Отмена",
            preConfirm: function() {
                return new Promise(function(resolve) {
                    $.ajax({
                        method: 'post',
                        url: 'http://st.cv05345.tmweb.ru/admin/resource/resource_branches/2',
                        data: {
                            _method:'delete',
                            _token:LA.token,
                        },
                        success: function (data) {
                            $.pjax({container:'#pjax-container', url: 'http://st.cv05345.tmweb.ru/admin/resource/resource_branches' });

                            resolve(data);
                        }
                    });
                });
            }
        }).then(function(result) {
            var data = result.value;
            if (typeof data === 'object') {
                if (data.status) {
                    swal(data.message, '', 'success');
                } else {
                    swal(data.message, '', 'error');
                }
            }
        });
    });


    $('.sort:not(.initialized)')
        .addClass('initialized')
        .bootstrapNumber({
            upClass: 'success',
            downClass: 'primary',
            center: true
        });

    $('textarea.desc').ckeditor();

    $("input.img").fileinput({"initialPreviewConfig":[{"caption":"01.png","key":0}],"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"\u0412\u044b\u0431\u043e\u0440 \u0444\u0430\u0439\u043b\u0430","cancelLabel":"\u041e\u0442\u043c\u0435\u043d\u0430","showRemove":false,"showUpload":false,"dropZoneEnabled":false,"deleteExtraData":{"img":"_file_del_","_file_del_":"","_token":"L3raVmdpnddEcYHb7RenmaTMUwzsKhMr1LSzWVw5","_method":"PUT"},"deleteUrl":"http:\/\/st.cv05345.tmweb.ru\/admin\/resource\/resource_branches\/2","fileActionSettings":{"showRemove":false,"showDrag":false},"allowedFileTypes":["image"]});


    $("input.utp_img").fileinput({"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"\u0412\u044b\u0431\u043e\u0440 \u0444\u0430\u0439\u043b\u0430","cancelLabel":"\u041e\u0442\u043c\u0435\u043d\u0430","showRemove":false,"showUpload":false,"dropZoneEnabled":false,"deleteExtraData":{"utp_img":"_file_del_","_file_del_":"","_token":"L3raVmdpnddEcYHb7RenmaTMUwzsKhMr1LSzWVw5","_method":"PUT"},"deleteUrl":"http:\/\/st.cv05345.tmweb.ru\/admin\/resource\/resource_branches\/2","fileActionSettings":{"showRemove":false,"showDrag":false},"allowedFileTypes":["image"]});


    $('.aside_cite_switcher.la_checkbox').bootstrapSwitch({
        size:'small',
        onText: 'ON',
        offText: 'OFF',
        onColor: 'primary',
        offColor: 'default',
        onSwitchChange: function(event, state) {
            $(event.target).closest('.bootstrap-switch').next().val(state ? 'on' : 'off').change();
        }
    });


    $("input.aside_cite_img").fileinput({"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"\u0412\u044b\u0431\u043e\u0440 \u0444\u0430\u0439\u043b\u0430","cancelLabel":"\u041e\u0442\u043c\u0435\u043d\u0430","showRemove":false,"showUpload":false,"dropZoneEnabled":false,"deleteExtraData":{"aside_cite_img":"_file_del_","_file_del_":"","_token":"L3raVmdpnddEcYHb7RenmaTMUwzsKhMr1LSzWVw5","_method":"PUT"},"deleteUrl":"http:\/\/st.cv05345.tmweb.ru\/admin\/resource\/resource_branches\/2","fileActionSettings":{"showRemove":false,"showDrag":false},"allowedFileTypes":["image"]});


    $('.aside_advert_switcher.la_checkbox').bootstrapSwitch({
        size:'small',
        onText: 'ON',
        offText: 'OFF',
        onColor: 'primary',
        offColor: 'default',
        onSwitchChange: function(event, state) {
            $(event.target).closest('.bootstrap-switch').next().val(state ? 'on' : 'off').change();
        }
    });


    $("input.aside_advert_img").fileinput({"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"\u0412\u044b\u0431\u043e\u0440 \u0444\u0430\u0439\u043b\u0430","cancelLabel":"\u041e\u0442\u043c\u0435\u043d\u0430","showRemove":false,"showUpload":false,"dropZoneEnabled":false,"deleteExtraData":{"aside_advert_img":"_file_del_","_file_del_":"","_token":"L3raVmdpnddEcYHb7RenmaTMUwzsKhMr1LSzWVw5","_method":"PUT"},"deleteUrl":"http:\/\/st.cv05345.tmweb.ru\/admin\/resource\/resource_branches\/2","fileActionSettings":{"showRemove":false,"showDrag":false},"allowedFileTypes":["image"]});

    $(".partners").select2({"allowClear":true,"placeholder":{"id":"","text":"\u041a\u043b\u0438\u0435\u043d\u0442\u044b"}});
    $(".articles").select2({"allowClear":true,"placeholder":{"id":"","text":"\u0421\u0442\u0430\u0442\u044c\u0438"}});
    $('textarea.price').ckeditor();
    $('textarea.warranty').ckeditor();

    $("input.aim_img").fileinput({"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"\u0412\u044b\u0431\u043e\u0440 \u0444\u0430\u0439\u043b\u0430","cancelLabel":"\u041e\u0442\u043c\u0435\u043d\u0430","showRemove":false,"showUpload":false,"dropZoneEnabled":false,"deleteExtraData":{"aim_img":"_file_del_","_file_del_":"","_token":"L3raVmdpnddEcYHb7RenmaTMUwzsKhMr1LSzWVw5","_method":"PUT"},"deleteUrl":"http:\/\/st.cv05345.tmweb.ru\/admin\/resource\/resource_branches\/2","fileActionSettings":{"showRemove":false,"showDrag":false},"allowedFileTypes":["image"]});

    $('textarea.aim_text').ckeditor();
    var index = 0;
    $('#has-many-sticker').on('click', '.add', function () {

        var tpl = $('template.sticker-tpl');

        index++;

        var template = tpl.html().replace(/__LA_KEY__/g, index);
        $('.has-many-sticker-forms').append(template);
        $(".sticker.services").select2({"allowClear":true,"placeholder":{"id":"","text":"\u0423\u0441\u043b\u0443\u0433\u0438"}});
    });

    $('#has-many-sticker').on('click', '.remove', function () {
        $(this).closest('.has-many-sticker-form').hide();
        $(this).closest('.has-many-sticker-form').find('.fom-removed').val(1);
    });

    $(".sticker.services").select2({"allowClear":true,"placeholder":{"id":"","text":"\u0423\u0441\u043b\u0443\u0433\u0438"}});
    $('.after-submit').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChecked', function () {
        $('.after-submit').not(this).iCheck('uncheck');
    });
});
