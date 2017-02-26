<style>
    .form-control{width:100%;}
    .packages_meta_box label{font-size: 13px;}
    input[type="radio"]{
        margin-right:15px;
    }
</style>
<form action="" method="POST">
    <div class="row packages_meta_box">
        <table width="100%">
            <tr>
                <td width="20%">
                    <label for="pkg_location_map">Location Map</label>
                </td>
                <td width="80%">
                    <textarea class="form-control" rows="4" name="pkg_location_map" id="pkg_location_map" placeholder="Please set Location map link"><?php echo get_post_meta($post->ID, 'pkg_location_map', true); ?></textarea>
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_duration">Package Duration</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_duration" id="pkg_duration" value="<?php echo get_post_meta($post->ID, 'pkg_duration', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label>Package Category</label>
                </td>
                <td width="80%">
                    <input <?php echo (get_post_meta($post->ID, 'pkg_cat', true)=='normal')?'checked':''; ?> type="radio" name="pkg_cat" value="normal" <?php checked( $get_pkg, 'normal' ); ?>> Normal Package
                    <input  <?php echo (get_post_meta($post->ID, 'pkg_cat', true)=='spacial')?'checked':''; ?>  type="radio" name="pkg_cat" value="spacial"> Spacial Package<br>
                </td>
            </tr>
            <tr>
                <td width="20%"><label for="pkg_type">Package Type</label></td>
                <td width="80%"><input class="form-control" type="text" name="pkg_type" id="pkg_type" value="<?php echo get_post_meta($post->ID, 'pkg_type', true); ?>" /></td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_adart_price">Adart Package Price</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_adart_price" id="pkg_adart_price" value="<?php echo get_post_meta($post->ID, 'pkg_adart_price', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_child_price">Child Package Price</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_child_price" id="pkg_child_price" value="<?php echo get_post_meta($post->ID, 'pkg_child_price', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_offer">Package Offer</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_offer" id="pkg_offer" value="<?php echo get_post_meta($post->ID, 'pkg_offer', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_ratting">Package Ratting</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_ratting" id="pkg_ratting" placeholder="Set Star Like *****" value="<?php echo get_post_meta($post->ID, 'pkg_ratting', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_departure_location">Departure Location</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_departure_location" id="pkg_departure_location" value="<?php echo get_post_meta($post->ID, 'pkg_departure_location', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_departure_date">Departure Date</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_departure_date" id="pkg_departure_date" value="<?php echo get_post_meta($post->ID, 'pkg_departure_date', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_departure_time">Departure Time</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_departure_time" id="pkg_departure_time" value="<?php echo get_post_meta($post->ID, 'pkg_departure_time', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_return_location">Return Location</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_return_location" id="pkg_return_location" value="<?php echo get_post_meta($post->ID, 'pkg_return_location', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_return_date">Return Date</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_return_date" id="pkg_return_date" value="<?php echo get_post_meta($post->ID, 'pkg_return_date', true); ?>" />
                </td>
            </tr>
        </table>
    </div> 
</form>