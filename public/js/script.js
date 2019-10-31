$(function () {
    $(document).on('click', '.sortField', function (e) {
        e.preventDefault();
        let table = $('#mainTable');
        table.data('field', $(this).data('field'))
        if(table.data('sort') === 'ASC'){
            table.data('sort', 'DESC');
        }
        else {
            table.data('sort', 'ASC');
        }
        sendAjax();
    });

    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        $('.pagination a').removeClass('active');
        $(this).addClass('active');
        $('#mainTable').data('page', $(this).text());
        sendAjax();
    });

    function sendAjax() {
        let mt = $('#mainTable');
        let field = mt.data('field');
        let sortType = mt.data('sort');
        let page = mt.data('page');
        let params = {
            field: field,
            sortType: sortType,
            page: page,
            action: 'get_table'
        };
        console.log(JSON.stringify(params));
        document.cookie = "tableParams=" + JSON.stringify(params)
        $.ajax({
            method: "GET",
            url: myajax.url,
            data: params,
            success: function (data) {
                $('#tBody').html(data);
            },
        });
    }
});
