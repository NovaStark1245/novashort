<?=
$this->Form->create(null, [
    'url' => ['controller' => 'Forms', 'action' => 'contact', 'prefix' => false],
    'id' => 'contact-form'
]);

?>

<?php
$this->Form->templates([
    'inputContainer' => '{{content}}',
    'error' => '{{content}}',
    'inputContainerError' => '{{content}}'
]);

?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group wow fadeInUp">
            <?=
            $this->Form->input('name', [
                'label' => false,
                'type' => 'text',
                'placeholder' => __('Your Name *'),
                'required' => 'required',
                'class' => 'form-control'
            ]);

            ?>
            <p class="help-block text-danger"></p>
        </div>
        <div class="form-group wow fadeInUp">
            <?=
            $this->Form->input('email', [
                'label' => false,
                'type' => 'text',
                'placeholder' => __('Your Email *'),
                'required' => 'required',
                'class' => 'form-control'
            ]);

            ?>
            <p class="help-block text-danger"></p>
        </div>
        <div class="form-group wow fadeInUp">
            <?=
            $this->Form->input('subject', [
                'label' => false,
                'type' => 'text',
                'placeholder' => __('Your Subject *'),
                'required' => 'required',
                'class' => 'form-control'
            ]);

            ?>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group wow fadeInUp">
            <?=
            $this->Form->input('message', [
                'label' => false,
                'type' => 'textarea',
                'placeholder' => __('Your Message *'),
                'required' => 'required',
                'class' => 'form-control'
            ]);

            ?>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    
</div>
    
<div class="wow fadeInUp">
    <?php if( (get_option('enable_captcha_contact') == 'yes') && isset_recaptcha() ) : ?>
        <div class="form-group captcha">
            <div id="captchaContact" style="display: inline-block;"></div>
        </div>
        <?php $this->Form->unlockField('g-recaptcha-response'); ?>
    <?php endif; ?>
</div>

<div class="text-center wow fadeInUp">
    <div id="success"></div>
    <?= $this->Form->button(__('Send Message'), ['class' => 'btn btn-xl']); ?>
</div>

<?= $this->Form->end(); ?>

<div class="contact-result"></div>
