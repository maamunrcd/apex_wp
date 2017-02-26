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
                <td style="width:100%;float:left;">
                    <label><b>Continents</b></label>
                </td>
                <td style="width:100%;float:left;">
                    <input <?php echo (get_post_meta($post->ID, 'photo_tag', true) == 'asia') ? 'checked' : ''; ?> type="radio" name="photo_tag" value="asia">Asia
                    <input <?php echo (get_post_meta($post->ID, 'photo_tag', true) == 'america') ? 'checked' : ''; ?> type="radio" name="photo_tag" value="america">America
                    <input <?php echo (get_post_meta($post->ID, 'photo_tag', true) == 'europe') ? 'checked' : ''; ?> type="radio" name="photo_tag" value="europe">Europe
                    <input <?php echo (get_post_meta($post->ID, 'photo_tag', true) == 'see_beatch') ? 'checked' : ''; ?> type="radio" name="photo_tag" value="see_beatch">See Beatch 
                </td>
            </tr>
        </table>

    </div> 

</form>