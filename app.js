jQuery(document).ready(function($) {
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    var page = 2;
    var totalPages = '<?php echo ceil(wp_count_posts('post')->publish / 2); ?>';

    $('#load_more').click(function() {
        var data = {
            'action': 'my_action',
            'page': page
        };

        $.post(ajaxurl, data, function(response) {
            $('.relationship-section').last().after(response);

            if (page == totalPages) {
                $('#load_more').hide();
            }

            page++;
        });
    });
});
