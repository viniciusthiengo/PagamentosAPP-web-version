<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://assets.pagar.me/js/pagarme.min.js"></script>
</head>
<body>

    <script>
        $(document).ready(function() { // quando o jQuery estiver carregado...
            PagarMe.encryption_key = "ek_test_JclGRIFi5UWnYjCZTnod9hKVmnWcsD";

            var creditCard = new PagarMe.creditCard();
            creditCard.cardHolderName = Android.getName();
            creditCard.cardExpirationMonth = Android.getMonth();
            creditCard.cardExpirationYear = Android.getYear();
            creditCard.cardNumber = Android.getCardNumber();
            creditCard.cardCVV = Android.getCvv();

            var fieldErrors = creditCard.fieldErrors();
            var errors = [], i = 0;
            for(var field in fieldErrors) { errors[i++] = field; }

            if(errors.length > 0) {
                Android.setError( errors );
            } else {
                // se não há erros, gera o card_hash...
                creditCard.generateHash(function(cardHash) {
                    Android.setToken( cardHash );
                });
            }
        });
    </script>

</body>
</html>