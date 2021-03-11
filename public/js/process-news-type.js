$(function () {
    jQuery.validator.setDefaults({
        errorClass: "invalid",
        rules: {
            news_type_name: {
                required: true,
            },
            action: "required"
        },
    });

    $('#modal_news_type').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget)
        var title = button.data('title')
        var action = button.data('action')
        var ob = button.data('ob')
        var modal = $(this)

        
        modal.find('.modal-title').text(title)
        // console.log(modal.find('.save').attr('action'));

        var news_type_name = modal.find('#news_type_name')
        var meta_title = modal.find('#meta_title')
        var meta_description = modal.find('#meta_description')
        var meta_keyword = modal.find('#meta_keyword')
        

        modal.find('.save').off('click')

        var form = modal.find("#form_news_type")
        form.validate()

        if(action == "edit"){
            console.log(ob);
            news_type_name.val(ob.name)
            meta_title.val(ob.meta_title)
            meta_description.val(ob.meta_description)
            meta_keyword.val(ob.meta_keyword)
        } else if(action == "add"){
            $('form').find("input[type=text], textarea, select").val("");
        }

        modal.find('.save').click(function(e){
            if(form.valid()){

                if(action == "add"){
                    $.ajax({
                        type: "post",
                        url: "/admin/news-type/store",
                        data: {
                            name:  news_type_name.val(),
                            meta_title: meta_title.val(),
                            meta_description: meta_description.val(),
                            meta_keyword: meta_keyword.val(),
                            slug: convertToSlug(news_type_name.val())
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
                        url: "/admin/news-type/update",
                        data: {
                            name:  news_type_name.val(),
                            meta_title: meta_title.val(),
                            meta_description: meta_description.val(),
                            meta_keyword: meta_keyword.val(),
                            slug: convertToSlug(news_type_name.val()),
                            id: ob.id
                        },
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            
                            modal.modal('hide')
                            // change data list
                            row.find('.news-type-name').text(response.name)
        
                            // change data modal
                            ob.name = response.name
                            ob.meta_title = response.meta_title
                            ob.meta_description = response.meta_description
                            ob.meta_keyword = response.meta_keyword

                            Toast.fire({
                                icon: 'success',
                                title: 'Cập nhật thành công!'
                            })
                        }
                    });
                }
            }
        })        
    })
});