<?php 

require 'markov.php';
ini_set('memory_limit', '-1');

if (isset($_POST['text'])) {
    // generate text with markov library
    $order  = 4;
    $length = 500;
    // $input  = $_REQUEST['input'];
    $ptext  = $_POST['text'];

    // if ($input) $text = $input;
    if ($ptext) $text = file_get_contents("text/".$ptext.".txt");

    if(isset($text)) {
        $markov_table = generate_markov_table($text, $order);
        $markov = generate_markov_text($length, $markov_table, $order);

        if (get_magic_quotes_gpc()) $markov = stripslashes($markov);
    }
}
?>


    <?php if (isset($markov)) : ?>
		<?php echo $markov; ?>
    <?php endif; ?>

