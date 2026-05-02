<?php
$str = $_POST['datachecker'];
$card = '5440781482554039 02/22 474 MEHMET ÇELİK BO';

function cardtwoleget($cardNumber)
{
  // Remove non-digits from the number
  $cardNumber = preg_replace('/\D/', '', $cardNumber);

  // Validate the length
  $len = strlen($cardNumber);
  if ($len < 15 || $len > 16) {
    echo 'Card Number İs Invalid!';
  } else {
    switch ($cardNumber) {
      case (preg_match('/^4/', $cardNumber) >= 1):
        return 'Visa';
      case (preg_match('/^5[1-5]/', $cardNumber) >= 1):
        return 'Mastercard';
      case (preg_match('/^3[47]/', $cardNumber) >= 1):
        return 'Amex';
      case (preg_match('/^3(?:0[0-5]|[68])/', $cardNumber) >= 1):
        return 'Diners Club';
      case (preg_match('/^6(?:011|5)/', $cardNumber) >= 1):
        return 'Discover';
      case (preg_match('/^(?:2131|1800|35\d{3})/', $cardNumber) >= 1):
        return 'JCB';
      default:
        echo 'Could not determine the credit card type.';
        break;
    }
  }
}


//echo cardtwoleget('371595357451004');
$card1 = preg_replace("/ /", "|", $card);
$card2 = preg_replace("/\//", "|", $card1);
$card3 = preg_replace("|/|", "|", $card2);
$card4 = preg_replace("/[^0-9|]/", "", $card3);
$newcard = strstr($card4, '4');
$separa = explode("|", $newcard);
$cc = $separa[0];
$ay = $separa[1];
$yil = $separa[2];
$cvv = $separa[3];

$newcard = $cc . '|' . $ay . '|' . $yil . '|' . $cvv;
$finish = substr($newcard, 0, 28);
echo $finish;
exit;