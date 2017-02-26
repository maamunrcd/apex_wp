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
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'project_status', true) == 'running') ? 'checked' : ''; ?> type="radio" name="project_status" value="running" <?php checked($project_status, 'running'); ?>>RUNNING PROJECT</span>
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'project_status', true) == 'pending') ? 'checked' : ''; ?> type="radio" name="project_status" value="pending" <?php checked($project_status, 'pending'); ?>> PENDING PROJECT</span>
                    <span class="inp_item"><input <?php echo (get_post_meta($post->ID, 'project_status', true) == 'finished') ? 'checked' : ''; ?> type="radio" name="project_status" value="finished" <?php checked($project_status, 'finished'); ?>> FINISHED PROJECT</span>
                    <br> 
                </td>
            </tr>
        </table>
    </div>
</form>