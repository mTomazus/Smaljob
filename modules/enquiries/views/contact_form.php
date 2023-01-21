<section class="container contact-us">
    <h1>Susisiekite</h1>
    <?php
    validation_errors();
    echo form_open($form_location);
    echo form_label('Your Name');
    $input_attr['placeholder'] = 'Įrašykite savo vardą';
    $input_attr['autocomplete'] = 'off';
    echo form_input('name', $name, $input_attr);

    echo form_label('Your Email Address');
    $input_attr['placeholder'] = 'Enter your email address here';
    echo form_email('email_address', $email_address, $input_attr);

    echo form_label('Darbų apimtis (glaustai)');
    $input_attr['placeholder'] = 'Aprašykite darbų apimtį glaustai';
    $input_attr['rows'] = 5;
    echo form_textarea('message', $message, $input_attr);

    echo '<p>Prove you\'re human by answering the question below!</p>';
    echo form_label($question);
    echo form_dropdown('answer', $options, $answer);

    echo form_submit('submit', 'Užsakyti');
    echo anchor(BASE_URL, 'Cancel', array('class' => 'button alt'));

    echo form_close();
    ?>
</section>

<style>
    .contact-us {
        font-family: 'Marcellus', serif;
    }
</style>