<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Les formulaires html
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php
                //commentaires : partie traitement formulaire
//                $message = "";
//                if(isset($_POST['btn_texte'])){
//                    $message = $_POST['ztexte'];
//                    printf("La valeur saisie est : %s", $message);
//                }
//                if(isset($_POST['btn_pass'])){
//                    $message = $_POST['zpass'];
//                    echo "La valeur saisie est : $message <br>";
//                }
//                if(isset($_POST['btn_sexe'])){
//                    $message = $_POST['sexe'];
//                    echo "Votre sexe est : <strong>$message</strong> <br>";
//                }
//                if(isset($_POST['btn_menu'])){
////                    var_dump($_POST['menu']);
//                    $message = implode(', ', $_POST['menu']);
//                    echo "Vous avez commandé : <strong>$message</strong> <br>";
//                }
//                if(isset($_POST['btn_couleur'])){
//                    $message = $_POST['sel_couleur'];
//                    echo "Votre couleur préférée est : <strong>$message</strong> <br>";
//                }
//                if(isset($_POST['btn_fruit'])){
//                    $message = implode(', ', $_POST['sel_fruit']);
//                    echo "Vos fruits préférés sont : <strong>$message</strong> <br>";
//                }
//                if(isset($_POST['btn_com'])){
//                    $message = $_POST['commentaire'];
//                    echo $message;
//                }
//                if(isset($_POST['btn_modif'])){
//                    $message = $_POST['nomClient'];
//                    echo $message;
//                }
                if(isset($_POST['btn_yeux'])){
                    $message = $_POST['couleur'];
                    echo $message;
                }
                if(isset($_POST['btn_txt'])){
                    $message = $_POST['zdate'];
                    echo $message;
                }
            ?>
            <!--Partie formulaire HTML-->

            <datalist id="couleur">
                <option value="Bleu">
                <option value="Vert">
                <option value="Marron">
            </datalist>
            <form action="sFormulaire.php" method="post">
                <label>
                    Couleur de vos yeux <br>
                    <input type="text" name="couleur" list="couleur">
                    <input type="submit" name="btn_yeux" value="Choisir">
                </label>
            </form>
            <hr>
            <form action="sFormulaire.php" method="post">
                <label>
                    Une zone de texte <br>
                    Numéro dossier :
                    <input type="text" name="zdossier"  pattern="[A-F]{2}[0-9]{9}" value=""
                                 placeholder="Saisir votre numéro de dossier" autofocus required>
                    Prénom : <input type="text" name="ztext2" value=""
                                    placeholder="Saisir votre prénom" autocomplete="on">
                    Date de naissance : <input type="date" name="zdate" value=""
                                               min="2022-02-22" max="2022-05-22"
                                               step="7">
                    Heure de naissance : <input type="time" name="zheure" value=""
                                                min="8:00" max="18:00"
                                                step="1800">
                    <input type="range" name="curse" value="" min="0.4" step="0.2" max="25.02">
<!--                    <input type="number" name="age" value="">-->
<!--                    <input type="url" name="site" value="">-->
<!--                    <input type="email" name="mail" value="">-->
<!--                    <input type="tel" name="tel" value="">-->
                    <input type="color" name="color" value="">
                    <input type="submit" name="btn_txt" value="Ajouter">
                </label>
            </form>
<!--            <form action="sFormulaire.php" method="post">-->
<!--                <label>-->
<!--                    Saisir un mot :-->
<!--                    <input type="text" name="ztexte" value="">-->
<!--                </label>-->
<!--                <input type="submit" name="btn_texte" value="Envoyer">-->
<!--            </form>-->
<!--            <form action="sFormulaire.php" method="post">-->
<!--                <label>-->
<!--                    Saisir un mot de passe-->
<!--                    <input type="password" name="zpass" value="">-->
<!--                    <input type="submit" name="btn_pass" value="Envoyer">-->
<!--                </label>-->
<!--            </form>-->
<!--            <form action="sFormulaire.php" method="post">-->
<!--                <label>-->
<!--                    Une zone Boutons "Radio"<br>-->
<!--                    De quel sexe êtes-vous ?<br>-->
<!--                    <input type="radio" name="sexe" value="F">Féminin-->
<!--                    <input type="radio" name="sexe" value="M">Masculin-->
<!--                    <input type="radio" name="sexe" value="?">Non défini-->
<!--                    <input type="submit" name="btn_sexe" value="Alors ?">-->
<!--                </label>-->
<!--            </form>-->
<!--            <form action="sFormulaire.php" method="post">-->
<!--                <label>-->
<!--                    Une zone de type checkbox<br>-->
<!--                    Au menu ce midi, souhaitez vous ? <br>-->
<!--                    <input type="checkbox" name="menu[]" value="entree">Entrée<br>-->
<!--                    <input type="checkbox" name="menu[]" value="plat">Plat<br>-->
<!--                    <input type="checkbox" name="menu[]" value="dessert">Dessert<br>-->
<!--                    <input type="checkbox" name="menu[]" value="cafe">Café<br>-->
<!--                    <input type="checkbox" name="menu[]" value="whisky">Whisky<br>-->
<!--                    <input type="submit" name="btn_menu" value="commander">-->
<!--                </label>-->
<!--            </form>-->
<!--            <form action="sFormulaire.php" method="post">-->
<!--                <label>-->
<!--                    Une zone de type select : votre couleur préférée? <br>-->
<!--                    <select name="sel_couleur" id="sel_couleur">-->
<!--                        <option value=""> --- Choisir --- </option>-->
<!--                        <option value="blanc"> Blanc </option>-->
<!--                        <option value="jaune"> Jaune </option>-->
<!--                        <option value="orange"> Orange </option>-->
<!--                        <option value="rouge"> Rouge </option>-->
<!--                    </select>-->
<!--                    <input type="submit" name="btn_couleur" value="choisir">-->
<!--                </label>-->
<!--            </form>-->
<!--            <form action="sFormulaire.php" method="post">-->
<!--                <label>-->
<!--                    Une zone de type select Multiple <br>-->
<!--                    Vos fruits préférés ? <br>-->
<!--                    <select name="sel_fruit[]" id="sel_fruit" multiple size="5">-->
<!--                        <option value=""> --- Choisir --- </option>-->
<!--                        <option value="cerise"> Cerise </option>-->
<!--                        <option value="fraise"> Fraise </option>-->
<!--                        <option value="framboise"> Framboise </option>-->
<!--                        <option value="prune"> Prune </option>-->
<!--                    </select>-->
<!--                    <input type="submit" name="btn_fruit" value="choisir">-->
<!--                </label>-->
<!--            </form>-->
<!--            <form action="sFormulaire.php" method="post">-->
<!--                <label>-->
<!--                    Une zone de type textarea (commentaires / observation...) <br>-->
<!--                    <textarea name="commentaire" id="commentaire" cols="30" rows="10">Ici le contenu</textarea>-->
<!--                    <input type="submit" name="btn_com" value="Enregistrer">-->
<!--                </label>-->
<!--            </form>-->
<!--            <form action="sFormulaire.php" method="post">-->
<!--                <label>-->
<!--                    Une zone cachée <br>-->
<!--                    <input type="hidden" name="idClient" value="418">-->
<!--                    Nom : <input type="text" name="nomClient" value="Jean Bon">-->
<!--                    <input type="submit" name="btn_modif" value="Modifier">-->
<!--                </label>-->
<!--            </form>-->
        </div>
    </body>
</html>
