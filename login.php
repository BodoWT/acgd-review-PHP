<?php
include 'Config/Database.php';

global $message;

// je vais verifier que le post est souùis
if(isset($_POST['mail']) && isset($_POST['pwd'])){
    $sql = "SELECT * FROM user WHERE email = :email AND is_valide = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute(
        [
            'email' => $_POST['mail']
        ]
    );

    $user = $stmt->fetch();

    if($user && password_verify($_POST['pwd'], $user['password'])){
        // je vais stocker les informations de l'utilisateur dans la session
        session_start();
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['email'] = $user['email'];

        // je vais rediriger l'utilisateur vers la page dashboard
        header('Location: dashboard.php');
    } else {
        $message = "Identifiants incorrects";
    }
} else {
    $message = "Veuillez remplir tous les champs";
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '_partials/head.php'; ?>
<body>
<?php include '_partials/header.php'; ?>
<body>
<main>
    <div id="formulaire" class="my-5">
        <form class="row col-xl-6 mx-auto">
            <div class="col-12 col-xl-6 mb-4">
                <label for="validationDefault01" class="form-label">* Votre adresse mail</label>
                <input type="email" class="form-control" id="validationDefault01" value="" required>
            </div>
            <div class="col-12 col-xl-6 mb-4">
                <label for="validationDefault02" class="form-label">* Mot de passe</label>
                <input type="password" class="form-control" id="validationDefault02" value="" required>
            </div>

            <div class="col-12 mt-5 mb-2"></div>
            <div class="col-12 my-5 text-center">
                <button class="btn btn-primary" type="submit" id="bouton_orange">Je me connect</button>
            </div>
        </form>
    </div>
</main>
<?php include '_partials/footer.php'; ?>
</body>
</html>