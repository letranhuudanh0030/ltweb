$(function () {
    jQuery.validator.setDefaults({
        debug: true,
        errorClass: "invalid",
        rules: {
            name: {
                required: true,
            },
            role: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: "/admin/user/check_email",
                    type: "post",
                }
            },
            phone:{
                number: true,
                minlength: 10,
                maxlength: 11,
            },
            password: {
                required: true,
                minlength: 8
            },
            rePassword: {
                equalTo: "#password",
                minlength: 8
            },
            

            action: "required"
        },
    });


    $('#modal_user').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget)
        var title = button.data('title')
        var action = button.data('action')
        var ob = button.data('ob')
        var modal = $(this)

        console.log(action);

        modal.find('.modal-title').text(title)
        var name = modal.find('#name')
        var role = modal.find('#role')
        var phone = modal.find('#phone')
        var email = modal.find('#email')
        var password = modal.find('#password')
        modal.find('.save').off('click')
        var form = modal.find("#form_user")
        form.validate()

        if(action == "edit"){
            password.rules("remove");
            email.rules("remove");
            modal.find('#email').prop('readonly', true)
            modal.find('.form-password').css('display', "none")
            modal.find('.form-repassword').css('display', "none")
            name.val(ob.name)
            role.val(ob.role_id)
            phone.val(ob.phone)
            email.val(ob.email)
        } else if(action == "add"){
            $('form').find("input[type=text], textarea, select").val("");
            modal.find('#email').prop('readonly', false)
            modal.find('.form-password').css('display', "block")
            modal.find('.form-repassword').css('display', "block")
        }
        modal.find('.save').click(function(e){
            if(form.valid()){
                if(action == "add"){
                    $.ajax({
                        type: "post",
                        url: "/admin/user/store",
                        data: {
                            name: name.val(),
                            role_id: role.val(),
                            email: email.val(),
                            phone: phone.val(),
                            password: password.val()
                        },
                        dataType: "json",
                        success: function (response) {
    
                            // console.log(response);
                            modal.modal('hide')
                            location.reload();
                        }
                    });
                } else if(action == "edit"){
                    let row = $('#table-content #row_'+ob.id)
                    
                    $.ajax({
                        type: "post",
                        url: "/admin/user/update",
                        data: {
                            name: name.val(),
                            role_id: role.val(),
                            phone: phone.val(),
                            id: ob.id
                        },
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            modal.modal('hide')
                            // change data list
                            row.find('.name').text(response.name)
                            let textRole = modal.find( "#role option:selected" ).text()
                            row.find('.type').text(textRole)
                            row.find('.email').text(response.email)
                            row.find('.phone').text(response.phone)
    
                            // change data modal
                            ob.name = response.name
                            ob.role_id = response.role_id
                            ob.phone = response.phone
                            ob.email = response.email

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