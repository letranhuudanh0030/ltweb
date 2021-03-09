$(function () {
    jQuery.validator.setDefaults({
        errorClass: "invalid",
        ignore: ":hidden, [contenteditable='true']:not([name])",
        rules: {
            news_name: {
                required: true,
            },
            news_type: {
                required: true
            }

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

    $('#modal_news').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget)
        var title = button.data('title')
        var action = button.data('action')
        var ob = button.data('ob')
        var modal = $(this)

        modal.find('.modal-title').text(title)
        var news_name = modal.find('#news_name')
        var news_type = modal.find('#news_type')
        var image = modal.find('#image')
        var description = modal.find('#description')
        var content = modal.find('#content')
        var meta_title = modal.find('#meta_title')
        var meta_description = modal.find('#meta_description')
        var meta_keyword = modal.find('#meta_keyword')

        modal.find('.save').off('click')

        var form = modal.find("#form_news")
        form.validate()

        if(action == "edit"){
            news_name.val(ob.title)
            news_type.val(ob.type_id)
            description.summernote("code", ob.description)
            content.summernote("code", ob.content)
            meta_title.val(ob.meta_title)
            meta_description.val(ob.meta_description)
            meta_keyword.val(ob.meta_keyword)
    
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
            content.summernote("code","")
            description.summernote("code","")
        }

        modal.find('.save').click(function(e){
            if(form.valid()){
                if(action == "add"){
                    $.ajax({
                        type: "post",
                        url: "/admin/news/store",
                        data: {
                            title:  news_name.val(),
                            description: description.val(),
                            content: content.val(),
                            type_id: news_type.val(),
                            image: converntUrlImage(image.val()),
                            meta_title: meta_title.val(),
                            meta_description: meta_description.val(),
                            meta_keyword: meta_keyword.val(),
                            slug: convertToSlug(news_name.val())
                        },
                        dataType: "json",
                        success: function (response) {
                            console.log(response);
                            modal.modal('hide')
                            location.reload();
                        }
                    });
                } else if(action == "edit"){
                    let row = $('#table-content #row_'+ob.id)
                    $.ajax({
                        type: "post",
                        url: "/admin/news/update",
                        data: {
                            title:  news_name.val(),
                            description: description.val(),
                            content: content.val(),
                            type_id: news_type.val(),
                            image: converntUrlImage(image.val()),
                            meta_title: meta_title.val(),
                            meta_description: meta_description.val(),
                            meta_keyword: meta_keyword.val(),
                            slug: convertToSlug(news_name.val()),
                            id: ob.id
                        },
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            modal.modal('hide')
                            // change data list
                            row.find('.news-title').text(response.title)
                            let textnewsType = modal.find( "#news_type option:selected" ).text()
                            row.find('.news-type').text(textnewsType)
        
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
                            ob.title = response.title
                            ob.type_id = response.type_id
                            ob.description = response.description
                            ob.content = response.content
                            ob.image = response.image
                            ob.meta_title = response.meta_title
                            ob.meta_description = response.meta_description
                            ob.meta_keyword = response.meta_keyword
                        }
                    });
                }
            }
        })        
    })
});