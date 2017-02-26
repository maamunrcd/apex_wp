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
                <td width="20%"><label for="employee_designation">Employee Designation</label></td>
                <td width="80%"><input class="form-control" type="text" name="employee_designation" id="pkg_type" value="<?php echo get_post_meta($post->ID, 'employee_designation', true); ?>" /></td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="employee_fb_id">Employee Facebook Id</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="employee_fb_id" id="pkg_adart_price" value="<?php echo get_post_meta($post->ID, 'employee_fb_id', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="employee_twi_id">Employee Twitter Id</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="employee_twi_id" id="pkg_child_price" value="<?php echo get_post_meta($post->ID, 'employee_twi_id', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="employee_linkedin_id">Employee linkedin Id</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="employee_linkedin_id" id="pkg_offer" value="<?php echo get_post_meta($post->ID, 'employee_linkedin_id', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="employee_googlePlus_id">Employee Google Plus Id</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="employee_googlePlus_id" id="pkg_offer" value="<?php echo get_post_meta($post->ID, 'employee_googlePlus_id', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="employee_email_id">Employee Email address</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="employee_email_id" id="pkg_departure_location" value="<?php echo get_post_meta($post->ID, 'employee_email_id', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="employee_phone_number">Employee Phone Number</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="employee_phone_number" id="pkg_departure_location" value="<?php echo get_post_meta($post->ID, 'employee_phone_number', true); ?>" />
                </td>
            </tr>
        </table>
    </div> 
</form>