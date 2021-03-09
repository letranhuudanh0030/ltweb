$(function () {
    jQuery.validator.setDefaults({
        errorClass: "invalid",
        rules: {
            name: {
                required: true,
            },
            image: {
                required: true,
            },
            action: "required"
        },
    });

    // SUMMERNOTE
    $('#description, #content, .summernote').summernote()

    $('.browser_image').click(function(){
        let input_images = $('.browser_image').attr('data-name-type');
        $('#filemanager').attr('src', `/public/file/dialog.php?type=1&field_id=${input_images}`);
    })

    $('#modal-file').on('hidden.bs.modal', function (e) {
        // show news images
        let image = $('#image').val()
        
        url_images(image, "show_image")
        
    });

    function url_images(url_images, show_imgs) {
        if(url_images){
            var html = ''
            if(url_images.search(',') > -1){
                var imgs = jQuery.parseJSON(url_images)
                imgs.forEach(element => {
                    html += '<img src="'+element+'" alt="" class="img-fluid mr-1" width="150px" height="150px">'
                });
            }else{
                html += '<img src="'+url_images+'" alt="" class="img-fluid mr-1" width="150px" height="150px">'
            }
            $('.' + show_imgs).html(html)
        }
    }

    $('.sort-order').keyup(function(e){
        let id = e.currentTarget.attributes.dataId.value
        let value = $(this).val()
        // console.log(id, value);
        $.ajax({
            type: "post",
            url: `/admin/slide/update-sort-order`,
            data: {
                id: id,
                value: value
            },
            dataType: "json",
            success: function (response) {}
        });   
    })

    $('#modal_slide').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget)
        var title = button.data('title')
        var action = button.data('action')
        var ob = button.data('ob')
        var modal = $(this)

        
        modal.find('.modal-title').text(title)

        var slide_name = modal.find('#slide_name')
        var image = modal.find('#image')
        var description = modal.find('#description')        

        modal.find('.save').off('click')

        var form = modal.find("#form_slide")
        form.validate()

        if(action == "edit"){
            console.log(ob);
            image.rules('remove')
            slide_name.val(ob.name)
            description.summernote("code", ob.description)
            let html_img = '';
            if(ob.image){
                let arrImg = ob.image.split(",")
                arrImg.forEach(element => {
                    html_img += `<img src="${element}" width="150px">`
                });
                modal.find('.show_image').html(html_img)
            }

        } else if(action == "add"){
            $('form').find("input[type=text], textarea, select").val("");
            modal.find('.show_image').html("")
            description.summernote("code","")
        }

        modal.find('.save').click(function(e){
            if(form.valid()){

                if(action == "add"){
                    $.ajax({
                        type: "post",
                        url: "/admin/slide/store",
                        data: {
                            name: slide_name.val(),
                            image: converntUrlImage(image.val()),
                            description: description.val(),
                        },
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            modal.modal('hide')
                            location.reload();
                        }
                    });
                } else if(action == "edit"){
                    // console.log(action);
                    let row = $('#table-content #row_'+ob.id)
                    $.ajax({
                        type: "post",
                        url: "/admin/slide/update",
                        data: {
                            name: slide_name.val(),
                            image: converntUrlImage(image.val()),
                            description: description.val(),
                            id: ob.id
                        },
                        dataType: "json",
                        success: function (response) {
                            
                            modal.modal('hide')
                            // change data list
                            row.find('.slide-name').text(response.name)
        
        
                            let html_img = ''
                            let arrImg = response.image.split(",")
                            arrImg.forEach((element,key) => {
                                if(key == 0 && element){
                                    html_img += `<img src="${element}" width="100px">`
                                } else {
                                    html_img += `<img src="/public/uploads/no-image.png" width="100px">`
                                }
                            });
                            row.find('.image').html(html_img)
        
                            // change data modal
                            ob.name = response.name
                            ob.image = response.image
                            ob.description = response.description
        
                        }
                    });
                }
            }
        })        
    })
});