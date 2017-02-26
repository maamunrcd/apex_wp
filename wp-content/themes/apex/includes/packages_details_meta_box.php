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
                    <label>Package Status</label>
                </td>
                <td width="80%">
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'pkg_cat', true) == 'normal') ? 'checked' : ''; ?> type="radio" name="pkg_cat" value="normal" <?php checked($get_pkg, 'normal'); ?>> Normal Package</span>
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'pkg_cat', true) == 'spacial') ? 'checked' : ''; ?> type="radio" name="pkg_cat" value="spacial"> Spacial Package</span>
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'pkg_cat', true) == 'upcoming') ? 'checked' : ''; ?> type="radio" name="pkg_cat" value="upcoming"> Upcoming Destination</span>
                    <br> 
                </td>
            </tr>
        </table>
    </div>
</form>