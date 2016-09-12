<?php
    require("../util/pagarme-php/Pagarme.php");



    Pagarme::setApiKey("sua API key");
    $transaction = new PagarMe_Transaction(array(
        'amount' => ($_POST['value'] * 100),
        'card_hash' => $_POST['token']
    ));
    $transaction->charge();
    $status = $transaction->status;



    $file = fopen('token.txt', 'w');
    fwrite($file, $_POST['product_id']."\n");
    fwrite($file, ($_POST['value'] * 100)."\n");
    fwrite($file, $_POST['token']."\n");
    fwrite($file, $_POST['parcels']."\n");
    fwrite($file, $status."\n");
    fclose($file);



    if( strcasecmp($status, 'refused') == 0 ){
        echo '"Pagamento recusado. Tente outro cartão."';
    }
    else{
        echo '"Pagamento aprovado. Em breve o produto estará em suas mãos."';
    }