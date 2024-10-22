<?php

function mindbody_update_locations_page(): void{
    echo '<h1>Update Locations</h1>';
    echo '<p>This page allows you to update locations for Mindbody integration.</p>';
    echo '<button id="update-locations-btn" class="button button-primary">Update Locations</button>';
    echo '<div id="update-status"></div>';

    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#update-locations-btn').click(function() {
                var $status = $('#update-status');
                $status.text('Updating locations...');

                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'mindbody_update_locations'
                    },
                    success: function(response) {
                        if (response.success) {
                            $status.html('<div class="notice notice-success">Locations updated successfully!</div>');
                        } else {
                            $status.html('<div class="notice notice-error">Error: ' + response.data + '</div>');
                        }
                    },
                    error: function(xhr, status, error) {
                        $status.html('<div class="notice notice-error">An error occurred: ' + error + '</div>');
                    }
                });
            });
        });
    </script>
    <?php
}




