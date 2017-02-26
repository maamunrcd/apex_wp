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
                    <label for="pkg_location_latitude">Latitude</label>
                </td>
                <td width="80%">
                    <input class="form-control" name="pkg_location_latitude" value="<?php echo get_post_meta($post->ID, 'pkg_location_latitude', true); ?>" id="pkg_location_map" placeholder="Please set Location latitude" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_location_longitude">Longitude</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_location_longitude" id="pkg_duration" value="<?php echo get_post_meta($post->ID, 'pkg_location_longitude', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="pkg_location_zoom">Zoom Level</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="pkg_location_zoom" id="pkg_type" value="<?php echo get_post_meta($post->ID, 'pkg_location_zoom', true); ?>" />
                </td>
            </tr>
        </table>
    </div> 
</form>