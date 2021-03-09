// CONVERT SLUG
const convertToSlug = function (Text)
{
    return Text
        .toLowerCase()
        .replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-')
        ;
}

function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

const converntUrlImage = function(image_url)
{
    let url = [];
    let domain = location.origin
    if(image_url){
        if(isJson(image_url)){
            let urlArr = JSON.parse(image_url)
            urlArr.forEach((element, key) => {
                url.push(element.replace(domain, ""))
            });
            url = url.join()
        } else {
            url = image_url.replace(domain, "")
        }

    }
    return url;
}

const addCommas = function(nStr, sign)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + `${sign}` + '$2');
    }
    return x1 + x2;
}

$(function(){
    // DATATABLE
    $("#table-content").DataTable({
        "order": [[ 0, "desc" ]],
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#product_type_list_wrapper .col-md-6:eq(0)');

    // console.log(location.pathname.split('/'));
    var tableInUri = location.pathname.split("/")[2];
    // UPDATE PUBLISH
    $('#table-content').on('click', '.chk-switch-publish', function(e){
        let id = e.currentTarget.attributes.dataId.value
        let value = $(this).is(':checked');
        $.ajax({
            type: "post",
            url: `/admin/${tableInUri}/change-publish`,
            data: {
                id: id,
                value: value
            },
            dataType: "json",
            success: function (response) {}
        });    
    })

    $('#table-content').on('click', '.chk-switch-highlight', function(e){
        let id = e.currentTarget.attributes.dataId.value
        let value = $(this).is(':checked');
        $.ajax({
            type: "post",
            url: `/admin/${tableInUri}/change-highlight`,
            data: {
                id: id,
                value: value
            },
            dataType: "json",
            success: function (response) {}
        });    
    })

    // DELETE
    $('#modal_delete').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget)
        var title = button.data('title')
        var name = button.data('name')
        var id = button.data('id')
        var modal = $(this)

        modal.find('.modal-title').text(title)
        modal.find('.item-name').text(name)

        modal.find('.delete').off('click')
        modal.find('.delete').click(function(){
            $.ajax({
                type: "post",
                url: `/admin/${tableInUri}/delete`,
                data: {
                    id: id
                },
                dataType: "json",
                success: function (response){
                    $('#table-content #row_'+id).fadeOut();
                    modal.modal('hide')
                }
            });
        })

    })
})