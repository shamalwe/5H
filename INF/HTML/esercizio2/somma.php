S<?php

$A = $_POST['primonumero'];
$B = $_POST['secondonumero'];
$operazione = $_POST['operazione'];

switch ($operazione) 
{
	case 'somma':
		$risultato = $A + $B;
		echo "somma di $A e $B è uguale a $risultato";
		break;
	case 'differenza':
		$risultato = $A - $B;
		echo "differenza di $A e $B è uguale a $risultato";
		break;
	case 'prodotto':
		$risultato = $A * $B;
		echo "prodotto di $A e $B è uguale a $risultato";
		break;
	case 'divisione':
		if ($B == 0) {
			echo "Errore: divisione per zero.";
		} 
        else {
			$risultato = $A / $B;
			echo "divisione di $A per $B è uguale a $risultato";
		}
		break;
	default:
		echo "Operazione non valida.";
}

?>