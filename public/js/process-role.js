$(function () {
    jQuery.validator.setDefaults({
        errorClass: "invalid",
        rules: {
            role_name: {
                required: true,
            },
            role: {
                required: true,
            },
            action: "required"
        },
    });

    $('#modal_role').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget)
        var title = button.data('title')
        var action = button.data('action')
        var ob = button.data('ob')
        var modal = $(this)

        modal.find('.modal-title').text(title)        
        var role_name = modal.find('#role_name')
        var role = modal.find('#role')

        modal.find('.save').off('click')
        
        if(action == "edit"){
            modal.find('.save').attr('data-id', ob.id);
            console.log(ob);
            role_name.val(ob.name)
            role.val(ob.role)
        } else if(action == "add"){
            $('form').find("input[type=text], textarea, select").val("");
        }
    
        var form = modal.find("#form_role")
        form.validate()
        modal.find('.save').click(function(e){
            if(form.valid()){
                if(action == "add"){
                    $.ajax({
                        type: "post",
                        url: "/admin/role/store",
                        data: {
                            name: role_name.val(),
                            role: role.val(),
                        },
                        dataType: "json",
                        success: function (response) {        
                            modal.modal('hide')
                            location.reload();
                        }
                    });
                } else if(action == "edit"){
                    let row = $('#table-content #row_'+ob.id)
                    $.ajax({
                        type: "post",
                        url: "/admin/role/update",
                        data: {
                            name:  role_name.val(),
                            role: role.val(),
                            id: ob.id
                        },
                        dataType: "json",
                        success: function (response) {
                            // console.log(response);
                            modal.modal('hide')
                            // change data list
                            row.find('.role-name').text(response.name)
                            let textRoleType = modal.find( "#role option:selected" ).text()
                            row.find('.role-type').text(textRoleType)
        
                            // change data modal
                            ob.name = response.name
                            ob.role = response.role
                        }
                    });
                }
            }
        })
    })
});