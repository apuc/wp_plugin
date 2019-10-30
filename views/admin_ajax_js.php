<script>
    jQuery(document).ready(function($) {
        var data = {
            action: 'pl_ajax',
            whatever: 1234
        };

        // с версии 2.8 'ajaxurl' всегда определен в админке
        jQuery.post( ajaxurl, data, function(response) {
            console.log('Получено с сервера: ' + response);
        });
    });
</script>