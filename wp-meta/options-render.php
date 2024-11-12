<?php

function mindbody_update_locations_page(): void{
    echo '<h1>Update Locations</h1>';
    echo '<p>This page allows you to update locations for Mindbody integration.</p>';
    echo '<button id="update-locations-btn" class="button button-primary">Update Locations</button>';
    echo '<div id="update-status"></div>';

    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#update-locations-btn').click(async function() {
                let $status = $('#update-status');
                $status.text('Fetching site IDs...');

                // Step 1: Fetch site IDs
                try {
                    let response = await $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'mindbody_get_site_ids'
                        }
                    });

                    if (response.success) {
                        $status.text('Updating locations...');
                        let siteIds = response.data;

                        for (const siteId of siteIds) {
                            await updateLocation(siteId);
                        }
                        $status.text('Location Updated');

                        $status.append('<div class="notice notice-success">All locations updated successfully.</div>');
                    } else {
                        $status.html('<div class="notice notice-error">An error occurred: ' + response.data + '</div>');
                    }
                } catch (error) {
                    $status.html('<div class="notice notice-error">An error occurred: ' + error + '</div>');
                }
            });

            function updateLocation(siteId) {
                let $status = $('#update-status');
                return $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'mindbody_update_location',
                        site_id: siteId
                    }
                }).done(function(updateResponse) {
                    if (updateResponse.success) {
                        $status.append('<div class="notice notice-success">Location ' + siteId + ' updated successfully.</div>');
                    } else {
                        $status.append('<div class="notice notice-error">Error updating location ' + siteId + ': ' + updateResponse.data + '</div>');
                    }
                }).fail(function(xhr, status, error) {
                    $status.append('<div class="notice notice-error">An error occurred with site ' + siteId + ': ' + error + '</div>');
                });
            }
        });
    </script>    <?php
}




