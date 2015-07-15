<?php // Change the css classes to suit your needs    

$attributes = array('class' => 'form-group form-inline', 'id' => 'company_profile');
echo form_open('company_profile_controller', $attributes); ?>

<p>
        <label for="company_name">Company Name <span class="required">*</span></label>
        <?php echo form_error('company_name'); ?>
        <br /><input id="company_name" type="text" class="form-control form-horizontal" name="company_name" maxlength="30" value="<?php echo set_value('company_name'); ?>"  />
</p>

<p>
        <label for="address_1">Address  <span class="required">*</span></label>
        <?php echo form_error('address_1'); ?>
        <br /><input id="address_1" type="text" class="form-control"  name="address_1" maxlength="30" value="<?php echo set_value('address_1'); ?>"  />
</p>

<p>
        <label for="address_2">Town </label>
        <?php echo form_error('address_2'); ?>
        <br /><input id="address_2" type="text" class="form-control"  name="address_2" maxlength="30" value="<?php echo set_value('address_2'); ?>"  />
</p>

<p>
        <label for="company_city">City <span class="required">*</span></label>
        <?php echo form_error('company_city'); ?>
        <br /><input id="company_city" type="text" class="form-control"  name="company_city" maxlength="30" value="<?php echo set_value('company_city'); ?>"  />
</p>

<p>
        <label for="company_country">Country <span class="required">*</span></label>
        <?php echo form_error('company_country'); ?>
        <br /><input id="company_country" type="text" class="form-control"  name="company_country" maxlength="30" value="<?php echo set_value('company_country'); ?>"  />
</p>

<p>
        <label for="company_phone">Phone No# <span class="required">*</span></label>
        <?php echo form_error('company_phone'); ?>
        <br /><input id="company_phone" type="text" class="form-control"  name="company_phone" maxlength="15" value="<?php echo set_value('company_phone'); ?>"  />
</p>

<p>
        <label for="company_email">Contact Email <span class="required">*</span></label>
        <?php echo form_error('company_email'); ?>
        <br /><input id="company_email" type="text" class="form-control"  name="company_email" maxlength="30" value="<?php echo set_value('company_email'); ?>"  />
</p>

<p>
        <label for="company_contact">Contact person <span class="required">*</span></label>
        <?php echo form_error('company_contact'); ?>
        <br /><input id="company_contact" type="text" class="form-control"  name="company_contact" maxlength="30" value="<?php echo set_value('company_contact'); ?>"  />
</p>

<p>
        <label for="company_vat">Vat No# <span class="required">*</span></label>
        <?php echo form_error('company_vat'); ?>
        <br /><input id="company_vat" type="text" class="form-control"  name="company_vat" maxlength="15" value="<?php echo set_value('company_vat'); ?>"  />
</p>

<p>
        <label for="company_reg">Co Reg No# <span class="required">*</span></label>
        <?php echo form_error('company_reg'); ?>
        <br /><input id="company_reg" type="text" class="form-control"  name="company_reg" maxlength="15" value="<?php echo set_value('company_reg'); ?>"  />
</p>

<p>
        <label for="company_position">Your roll / position <span class="required">*</span></label>
        <?php echo form_error('company_position'); ?>
        <br /><input id="company_position" type="text" class="form-control"  name="company_position" maxlength="30" value="<?php echo set_value('company_position'); ?>"  />
</p>

<p>
        <label for="company_num_emp">The number of employees <span class="required">*</span></label>
        <?php echo form_error('company_num_emp'); ?>
        <br /><input id="company_num_emp" type="text"  class="form-control" name="company_num_emp" maxlength="11" value="<?php echo set_value('company_num_emp'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
