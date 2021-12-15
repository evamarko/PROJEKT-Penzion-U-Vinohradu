<? if ( Mail("marko.ev92@gmail.com", $jmeno, $telefon, $zprava, "From: " . $email) )
echo "Formulář byl odeslán";
else echo "Formulář se nepodařilo odeslat"; ?>