<?php
/**
 * Mostro il blocco THEN solo se passa il controllo (sono aperte le iescrizioni) altrimenti mostro il blocco ELSE
 */
if(strtotime($info["aperturaiscrizioni"]) - (new DateTime())->getTimestamp() < 0):
?>

<h4 class="text-center">
    Benvenuto nel sito di <strong><?php echo $info["titolo"]; ?></strong>
    <?php if(isset($utente)) echo ", " . $utente->getNome() . " " . $utente->getCognome() . "."; ?>
</h4>

<hr />

<p class="text-justify">
Prima di iscriverti, puoi dare un'occhiata ai corsi disponibili e altre informazioni cliccando su <code>Tutti i corsi</code>.
Per iniziare l'iscrizione, premi su <i class="fa fa-sign-in"></i> Accedi nella barra di navigazione in alto a destra (se stai utilizzando un dispositivo mobile, clicca sull'icona <i class="fa fa-bars"></i>
situtata in alto a destra: nel menu che appare clicca <span class="fa fa-sign-in"></span> Accedi): si aprirà una potrai accedere con le credenziali a te assegnate per effettuare il primo accesso (con contestuale registrazione).
Effettuata la registrazione al sistema, potrai accedere tramite il pannello di accesso.
</p>

<p class="text-justify">
Dopo che avrai avuto accesso, aprendo la pagina <code>Iscrizione</code>, potrai iscriverti ai corsi seguendo il processo guidato.
</p>
<p class="text-justify">
Nella pagina <code>I miei corsi</code> potrai vedere la lista dei corsi a cui ti sei iscritto, annullare l'iscrizione a tutti i corsi che hai scelto (se ne hai bisogno) ed infine stampare la lista di questi ultimi.
</p>
<p class="text-justify">
Nel caso tu abbia la necessità di interrompere il processo di iscrizione, puoi uscire dall'account cliccando sul tuo nome in alto a destra (se stai utilizzando un dispositivo mobile, clicca sull'icona <i class="fa fa-bars"></i>
in alto a destra): nel menu a tendina che compare clicca il tuo nome e poi <i class="fa fa-sign-out"></i> Esci.
</p>

<?php
else:
?>

<h4 class="text-center">Benvenuto nel sito per l'iscrizione a <strong><?php echo $info["titolo"]; ?></strong></h4>

<hr />

<p class="text-justify">
Prima di iscriverti, puoi dare un'occhiata ai corsi disponibili e altre informazioni cliccando su <code>Tutti i corsi</code>.
</p>

<p class="text-justify">
La possibilità di registrarti, con le credenziali che ti sono state date dai Rappresentanti degli Studenti,
 e successivamente di accedere, ti sarà comunicata appena disponibile.
</p>

<?php
endif;
?>