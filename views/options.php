<script type="text/javascript">var __namespace = '<?php echo $namespace; ?>';</script>
<div class="wrap">

    <h2><?php echo $page_title; ?></h2>
        
    <?php if( isset( $_GET['message'] ) ): ?>
        <div id="message" class="updated below-h2"><p>Options successfully updated!</p></div>
    <?php endif; ?>

    <form action="" method="post" id="<?php echo $namespace; ?>-form">
        <?php settings_fields($namespace . '_options'); ?>
        <?php $options = get_option($namespace);?>
        <table class="form-table">
            <?php foreach($settings as $setting): ?>
            <tr valign="top">
                <th scope="row">
                    <label for="<?php echo $namespace; ?>_<?php echo $setting['slug']; ?>">
                        <?php echo $setting['name']; ?>
                    </label>
                </th>
                <td>
                    <?php switch($setting['type']){
                        case 'checkbox':
                    ?>
                        <input id="<?php echo $namespace; ?>_<?php echo $setting['slug']; ?>"
                               name="<?php echo $namespace; ?>[<?php echo $setting['slug']; ?>]"
                               type="checkbox"
                               value="1" <?php checked('1', $options[$setting['slug']]); ?> />
                    <?php
                        break;
                        case 'radio':
                            //not implemented yet
                        break;
                        case 'select':
                            // not implemented yet
                        break;
                        case 'textarea': ?>
                        <textarea id="<?php echo $namespace; ?>_<?php echo $setting['slug']; ?>"
                                  name="<?php echo $namespace; ?>[<?php echo $setting['slug']; ?>]"
                                  ><?php echo $options[$setting['slug']]; ?></textarea>
                    <?php
                        break;
                        case 'text':
                        default: ?>
                        <input id="<?php echo $namespace; ?>_<?php echo $setting['slug']; ?>"
                               name="<?php echo $namespace; ?>[<?php echo $setting['slug']; ?>]"
                               type="text"
                               value="<?php echo $options[$setting['slug']]; ?>" />
                    <?php
                        break;
                    }?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
    
</div>