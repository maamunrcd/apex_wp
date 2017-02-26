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
                    <label for="event_start_date">Evetns Start Date</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="event_start_date" id="event_start_date" placeholder="This field Only For Event Start Date" value="<?php echo get_post_meta($post->ID, 'event_start_date', true); ?>" />
                </td>
            </tr>
            <tr>
                <td width="20%">
                    <label for="event_end_date">Evetns End Date</label>
                </td>
                <td width="80%">
                    <input class="form-control" type="text" name="event_end_date" id="event_end_date" placeholder="This Field Only For Event End Date" value="<?php echo get_post_meta($post->ID, 'event_end_date', true); ?>" />
                </td>
            </tr>
        </table>
    </div> 
</form>