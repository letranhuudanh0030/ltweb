$(function () {
    jQuery.validator.setDefaults({
        errorClass: "invalid",
        ignore: ":hidden, [contenteditable='true']:not([name])",
        rules: {
            product_name: {
                required: true,
            },
            product_type: {
                required: true
            },
            price: {
                required: true,
                number: true
            },
            discount: {
                number: true
            },

        },
    });

    // SUMMERNOTE
    $('#description, #content, .summernote').summernote()

    $('.browser_image').click(function(){
        let input_images = $('.browser_image').attr('data-name-type');
        $('#filemanager').attr('src', `/public/file/dialog.php?type=1&field_id=${input_images}`);
    })

    $('#modal-file').on('hidden.bs.modal', function (e) {
        // show product images
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


    $('#modal_product').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget)
        var title = button.data('title')
        var action = button.data('action')
        var ob = button.data('ob')
        var modal = $(this)

        modal.find('.modal-title').text(title)

        var product_name = modal.find('#product_name')
        var product_type = modal.find('#product_type')
        var price = modal.find('#price')
        var discount = modal.find('#discount')
        var image = modal.find('#image')
        var description = modal.find('#description')
        var content = modal.find('#content')
        var meta_title = modal.find('#meta_title')
        var meta_description = modal.find('#meta_description')
        var meta_keyword = modal.find('#meta_keyword')

        modal.find('.save').off('click')

        var form = modal.find("#form_product")
        form.validate()

        if(action == "edit"){
            console.log(ob);
            product_name.val(ob.name)
            product_type.val(ob.type_id)
            price.val(ob.price)
            discount.val(ob.discount)
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
                        url: "/admin/product/store",
                        data: {
                            name:  product_name.val(),
                            price: price.val(),
                            discount: discount.val(),
                            description: description.val(),
                            content: content.val(),
                            type_id: product_type.val(),
                            image: converntUrlImage(image.val()),
                            meta_title: meta_title.val(),
                            meta_description: meta_description.val(),
                            meta_keyword: meta_keyword.val(),
                            slug: convertToSlug(product_name.val())
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
                        url: "/admin/product/update",
                        data: {
                            name:  product_name.val(),
                            price: price.val(),
                            discount: discount.val(),
                            description: description.val(),
                            content: content.val(),
                            type_id: product_type.val(),
                            image: converntUrlImage(image.val()),
                            meta_title: meta_title.val(),
                            meta_description: meta_description.val(),
                            meta_keyword: meta_keyword.val(),
                            slug: convertToSlug(product_name.val()),
                            id: ob.id
                        },
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            modal.modal('hide')
                            // change data list
                            row.find('.product-name').text(response.name)
                            let textProductType = modal.find( "#product_type option:selected" ).text()
                            row.find('.product-type').text(textProductType)
                            row.find('.price').text(addCommas(response.price, '.'))
                            row.find('.discount').text(response.discount)
        
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
                            ob.type_id = response.type_id
                            ob.price = response.price
                            ob.discount = response.discount
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