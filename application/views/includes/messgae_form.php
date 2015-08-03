<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('message_controller', $attributes); ?>

<p>
        <label for="from">from <span class="required">*</span></label>
        <?php echo form_error('from'); ?>
        <br /><input id="from" type="text" name="from" maxlength="5" value="<?php echo set_value('from'); ?>"  />
</p>

<p>
        <label for="to">to <span class="required">*</span></label>
        <?php echo form_error('to'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('to', $options, set_value('to'))?>
</p>                                             
                        
<p>
        <label for="message">message <span class="required">*</span></label>
        <?php echo form_error('message'); ?>
        <br /><input id="message" type="text" name="message" maxlength="500" value="<?php echo set_value('message'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
