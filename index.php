<?php
    include 'Config/Database.php';

    $sql = "SELECT article.* 
            FROM article
            INNER JOIN categories  
                ON article.categories_id = categories.id 
            WHERE categories.title = 'Musique'
            ORDER BY article.id DESC
            Limit 6
            ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
   
?>
<!DOCTYPE html>
<html lang="en">
    <?php include '_partials/head.php'; ?>
<body>
    <?php include '_partials/header.php'; ?>   
    <main>
        <!--Slider-->
        <div class="row" id="banner">
            <div class="col-12 col-md-12">
                <img src="./assets/image/accueil/slide-acceuil.jpg" alt="slider" width="1920" height="305"
                    class="slider mt-3">
                <!--<h1 class="slide text-center">Actuellement</h1>-->
            </div>
        </div>

        <!--Hook of the web site-->
        <div>
            <h1 class="tittle text-uppercase gras text-center py-3 titre mb-1 "><strong>distinguer le remarquable du
                    banal!</strong></h1>
        </div>

        <div class="container-fluid">
            <!--Category 1 title-->
            <section class="col-12">
                <div class="row">
                    <h2 class="category text-uppercase gras text-center py-2 stitre"><strong>cinéma</strong></h2>
                    <!--MOVIE-->
                    <article class="col-4">
                        <img class="img-fluid mt-3 rounded-5" src="./assets/image/accueil/cimema-accueil.jpg"
                            alt="image film aquaman" width="192" height="127" style="height: auto; width: auto;">
                    </article>
                    <!--Movie section 1-->
                    <div class="col-8 pt-3">
                        <div class="row">
                            <?php while($cine = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/covers/<?php echo $cine['cover'] ?>" alt="image film aquaman"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong><?= $cine['title'] ?></strong></h3>
                                        <p class="overflow-scroll">
                                        
                                        <?= substr($cine['description'], 0, 30) ?></p>
                                        <p>publié le<timer><?= $cine['created_at'] ?></timer>
                                    </article>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid">
            <!--Category 2 title-->
            <section class="col-12">
                <div class="row">
                    <h2 class="category text-uppercase gras text-center py-2 stitre mt-3"><strong>série</strong></h2>
                    <!--SERIES-->
                    <div class="col-sm-8 pt-3">
                        <div class="row">
                            <!--Serie section 1-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>aman</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid rounded-5"
                                            src="./assets/image/accueil/acserie-aman.jpg" alt="image série aman"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Serie section 2-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>misanthrope</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acserie-misanthrope.png" alt="image série misanthrope "
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Serie section 3-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>iris et les hommes</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>

                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid rounded-5"
                                            src="./assets/image/accueil/acserie-iris.jpg" alt="image série iris et les hommes"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Serie section 4-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>pauvre créature</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acserie-pauvrecrea.jpg" alt="image série pauvre créature"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Serie section 5-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>krisha et le maître</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>                                    
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acserie-krisha.jpg" alt="image série krisha et le maître"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Serie section 6-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-items-lg-baseline text-capitalize"><strong>un coup de dés</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>                                   
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acserie-coupde.jpg" alt="image série un coup de dés"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                         </div>
                    </div>     
                <div class="col-4">
                    <div class="row">
                        <article class="col-12">
                            <img class="img-fluid mt-3 rounded-5" src="./assets/image/accueil/serie-accueil.jpg"
                                alt="image film aquaman" width="490" height="453" style="height: auto; width: auto;">
                        </article>
                    </div>
                </div>
             </section>
        </div>
        <div class="container-fluid">
            <!--Category 3 title-->
            <section class="col-12">
                <div class="row">
                    <h2 class="category text-uppercase gras text-center py-2 stitre mt-3"><strong>gaming</strong></h2>
                    <!--GAMING-->
                    <article class="col-4">
                        <img class="img-fluid mt-3 rounded-5" src="./assets/image/accueil/gaming-accueil.jpg"
                            alt="image film aquaman" width="192" height="127" style="height: auto; width: auto;">
                    </article>
                    <div class="col-8">
                        <div class="row">
                            <!--Gaming section 1-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acgame-fortnite.jpg" alt="image gaming fortnite"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>fortnite</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Gaming section 2-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acgame-finalf.jpg" alt="image gaming final fantasy VII"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>final fantasy VII</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Gaming section 3-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acgame-starwars.jpg" alt="image gaming star wars outland"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>star wars outland</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Gaming section 4-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acgame-dragond.jpg" alt="image gaming dragon dogma II"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>dragon dogma II</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Gaming section 5-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acgame-hollow.jpg" alt="image gaming hollowknight"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>hollowknight</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Gaming section 6-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acgame-hades.jpg" alt="image gaming hades II"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>hades II</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid">
            <!--Category 4 title-->
            <section class="col-12">
                <div class="row">
                    <h2 class="category text-uppercase gras text-center py-2 stitre mt-3"><strong>musique</strong></h2>
                    <!--MUSIC-->
               <div class="col-sm-8">
                        <div class="row">
                            <!--Music section 1-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="mt-2"><strong>20&2</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid rounded-5"
                                            src="./assets/image/accueil/acmus-vinght.jpg" alt="image musique 20&2"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Music section 2-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>orqideas</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acmus-orchid.jpg" alt="image musique orqideas "
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Music section 3-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>24</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid rounded-5"
                                            src="./assets/image/accueil/acmus-deuxquatre.jpg" alt="image musique 24"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Music section 4-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>bluedron</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acmus-blued.jpg" alt="image musique bluedron"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Music section 5-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>nightshift mix</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>                                    
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acmus-nights.jpg" alt="image musique nightshift mix"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Music section 6-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-items-lg-baseline text-capitalize"><strong>lacrima</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>                                   
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acmus-lacrima.jpg" alt="image musique lacrima"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                         </div>
                    </div>     
                <div class="col-4">
                    <div class="row">
                        <article class="col-12">
                            <img class="img-fluid mt-3 rounded-5" src="./assets/image/accueil/musique-accueil.jpg"
                                alt="image film aquaman" width="192" height="127" style="height: auto; width: auto;">
                        </article>
                    </div>
                </div>
             </section>
        </div>
        <div class="container-fluid">
            <!--Category 5 title-->
            <section class="col-12">
                <div class="row">
                    <h2 class="category text-uppercase gras text-center py-2 stitre mt-3"><strong>livre</strong></h2>
                    <!--BOOK-->
                    <article class="col-4">
                        <img class="img-fluid mt-3 rounded-5" src="./assets/image/accueil/livre-accueil.jpg"
                            alt="image film aquaman" width="192" height="127" style="height: auto; width: auto;">
                    </article>
                    <div class="col-8">
                        <div class="row">
                            <!--Book section 1-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/aclivre-panorama.jpg" alt="image livre panorama"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>panorama</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Book section 2-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/aclivre-veiller.jpg" alt="image livre veiller sur elle"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>veiller sur elle</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Book section 3-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/aclivre-aiguilles.jpg" alt="image livre les aiguilles d'or"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>les aiguilles d'or</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Book section 4-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/aclivre-lemage.jpg" alt="image livre le mage du kremelin"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>le mage du kremelin</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Book section 5-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/aclivre-lajuree.jpg" alt="image livre la jurée"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>la jurée</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                            <!--Book section 6-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/aclivre-troivies.jpg" alt="image livre trois vies par semaine"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <h3 class="align-baseline text-capitalize"><strong>trois vies par semaine</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid">
            <!--Category 6: title-->
            <section class="col-12">
                <div class="row">
                    <h2 class="category text-uppercase gras text-center py-2 stitre mt-3"><strong>événement</strong></h2>
                    <!--EVENTS-->
                    <div class="col-sm-8">
                        <div class="row">
                            <!--Event section 1-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="mt-2"><strong>rose festival</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid rounded-5"
                                            src="./assets/image/accueil/acevent-rosef.jpg" alt="image événement rose festival"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Event section 2-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>exposition street art</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acevent-streetart.jpg" alt="image événementexposition street art"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Event section 3-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>dédicace ségolène royal</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>

                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid rounded-5"
                                            src="./assets/image/accueil/acevent-sego.jpg" alt="image événement dédicace ségolène royal"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Event section 4-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-baseline text-capitalize"><strong>les nuits courtes</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acevent-nuitc.jpg" alt="image événement les nuits courtes"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Event section 5-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="text-capitalize"><strong>free music</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>                                    
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acmus-nights.jpg" alt="image événement free music"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                            <!--Event section 6-->
                            <div class="col-6">
                                <div class="row">
                                    <article class="col-4 col-lg-6 text-lg-end">
                                        <h3 class="align-items-lg-baseline text-capitalize"><strong>musicalure</strong></h3>
                                        <p class="overflow-scroll" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sint in repellat officiis cum.</p>
                                        <p>publié le<timer>24/01/2024</timer>
                                    </article>                                   
                                    <article class="col-4 col-lg-6 ">
                                        <img class="img-fluid mt-3 rounded-5"
                                            src="./assets/image/accueil/acevent-musical.jpg" alt="image événement musicalure"
                                            width="192" height="127" style="height: auto; width: auto;">
                                    </article>
                                </div>
                            </div>
                         </div>
                    </div>     
                <div class="col-4">
                    <div class="row">
                        <article class="col-12">
                            <img class="img-fluid mt-3 rounded-5" src="./assets/image/accueil/event-accueil.jpg"
                                alt="image catégorie événements" width="490" height="453" style="height: auto; width: auto;">
                        </article>
                    </div>
                </div>
             </section>
                <!--arrow go top page-->
                <div class="limit text-center pb-5">
                    <a href="#"><img src="./assets/image/accueil/fleche-toppage.svg" alt="fleche retour haut de la page accueil" class=""></a>
                </div>
            </section>
        </div>
    </main>
    <?php include '_partials/footer.php'; ?>
</body>
</html>