<?php
require_once __DIR__ . './../src/controllers/add-patients.php';

ob_start();

?>

<body>
  <section>
    <h1>Ajouter un patient</h1>
  </section>

  <section>
    <form action="./?action=addPatients" method="POST">
      <div>
        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname">
      </div>
      <div>
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname">
      </div>
      <div>
        <label for="datebirth">Date de naissance :</label>
        <input type="date" name="datebirth" id="datebirth" value="<?= date('Y-m-d'); ?>">
      </div>
      <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" name="phone" id="phone">
      </div>
      <div>
        <label for="mail">Email :</label>
        <input type="mail" name="mail" id="mail">
      </div>
      <input type="submit" name="addPatient" value="Ajouter">
    </form>
  </section>
</body>

<?php
$content = ob_get_clean();
echo $content;

