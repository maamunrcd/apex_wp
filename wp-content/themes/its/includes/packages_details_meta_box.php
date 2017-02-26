<style>
    .form-control {
        width: 100%;
    }

    .packages_meta_box label {
        font-size: 13px;
    }

    input[type="radio"] {
        margin-right: 15px;
    }
    .inp_item{
        display: inline-block;
        margin-right:30px;
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
                    <textarea class="form-control" rows="4" name="pkg_location_map" id="pkg_location_map" placeholder="Please set Location map link">
                        <?php echo get_post_meta($post->ID, 'pkg_location_map', true); ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_duration">Package Duration</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_duration" id="pkg_duration" value="<?php echo get_post_meta($post->ID, 'pkg_duration', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label>Package Category</label>
                </td>
                <td width="80%">
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'pkg_cat', true) == 'normal') ? 'checked' : ''; ?> type="radio" name="pkg_cat" value="normal" <?php checked($get_pkg, 'normal'); ?>> Normal Package</span>
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'pkg_cat', true) == 'spacial') ? 'checked' : ''; ?> type="radio" name="pkg_cat" value="spacial"> Spacial Package</span>
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'pkg_cat', true) == 'upcoming') ? 'checked' : ''; ?> type="radio" name="pkg_cat" value="upcoming"> Upcoming Destination</span>
                    <br> 
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_type">Package Type</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_type" id="pkg_type" value="<?php echo get_post_meta($post->ID, 'pkg_type', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_adart_price">Adult Package cost</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_adart_price" id="pkg_adart_price" value="<?php echo get_post_meta($post->ID, 'pkg_adart_price', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_child_price">Child Package cost</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_child_price" id="pkg_child_price" value="<?php echo get_post_meta($post->ID, 'pkg_child_price', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_offer">Package Discount</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_offer" id="pkg_offer" value="<?php echo get_post_meta($post->ID, 'pkg_offer', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="services">Services</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="services" id="services" value="<?php echo get_post_meta($post->ID, 'services', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_ratting">Package Ratting</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_ratting" id="pkg_ratting" placeholder="Set Star Like *****" value="<?php echo get_post_meta($post->ID, 'pkg_ratting', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_departure_location">Departure Location</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_departure_location" id="pkg_departure_location" value="<?php echo get_post_meta($post->ID, 'pkg_departure_location', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_departure_date">Departure Date</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_departure_date" id="pkg_departure_date" value="<?php echo get_post_meta($post->ID, 'pkg_departure_date', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_departure_time">Departure Time</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_departure_time" id="pkg_departure_time" value="<?php echo get_post_meta($post->ID, 'pkg_departure_time', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_return_location">Return Location</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_return_location" id="pkg_return_location" value="<?php echo get_post_meta($post->ID, 'pkg_return_location', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_return_date">Return Date</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_return_date" id="pkg_return_date" value="<?php echo get_post_meta($post->ID, 'pkg_return_date', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_return_time">Return Time</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_return_time" id="pkg_return_time" value="<?php echo get_post_meta($post->ID, 'pkg_return_time', true); ?>" /> </td>
            </tr>
            <tr>
                <td>
                    <label for="pkg_vehicle">Transport</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_vehicle" id="pkg_vehicle" value="<?php echo get_post_meta($post->ID, 'pkg_vehicle', true); ?>" /> </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_included">Included</label>
                </td>
                <td width="80%">
                    <textarea class="form-control" rows="4" name="pkg_included" id="pkg_included" placeholder="Write Included item with in Comma like this = Professional instructor,Meals,1 hour of free time">
                        <?php echo get_post_meta($post->ID, 'pkg_included', true); ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_not_included">Not Included</label>
                </td>
                <td width="80%">
                    <textarea class="form-control" rows="4" name="pkg_not_included" id="pkg_not_included" placeholder="Write Not Included item with in Comma like this = Professional instructor,Meals,1 hour of free time">
                        <?php echo get_post_meta($post->ID, 'pkg_not_included', true); ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="terms_conditions">Terms & Condition</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="terms_conditions" id="terms_conditions" value="<?php echo get_post_meta($post->ID, 'terms_conditions', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="payment_mode">Payment Mode</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="payment_mode" id="payment_mode" value="<?php echo get_post_meta($post->ID, 'payment_mode', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="remark">Remark</label>
                </td>
                <td width="80%">
                    <textarea class="form-control" rows="4" name="remark" id="remark" placeholder="Remark">
                        <?php echo get_post_meta($post->ID, 'remark', true); ?>
                    </textarea>
                </td>
            </tr>
        </table>
    </div>
</form>