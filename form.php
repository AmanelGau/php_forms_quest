<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
        /* Uniquement centrer le formulaire sur la page */
        margin: 0 auto;
        width: 410px;
        /* Encadré pour voir les limites du formulaire */
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
        }

        form div + div {
        margin-top: 1em;
        }

        label {
        /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
        display: inline-block;
        width: 100px;
        text-align: right;
        }

        input, textarea, select {
        /* Pour s'assurer que tous les champs texte ont la même police.
            Par défaut, les textarea ont une police monospace */
        font: 1em sans-serif;

        /* Pour que tous les champs texte aient la même dimension */
        width: 300px;
        box-sizing: border-box;

        /* Pour harmoniser le look & feel des bordures des champs texte */
        border: 1px solid #999;
        }

        input:focus, textarea:focus {
        /* Pour souligner légèrement les éléments actifs */
        border-color: #000;
        }

        textarea {
        /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
        vertical-align: top;

        /* Pour donner assez de place pour écrire du texte */
        height: 5em;
        }

        .button {
        /* Pour placer le bouton à la même position que les champs texte */
        padding-left: 90px; /* même taille que les étiquettes */
        }

        button {
        /* Cette marge supplémentaire représente grosso modo le même espace que celui
            entre les étiquettes et les champs texte */
        margin-left: .5em;
        }
    </style>
</head>
<body>
    <form  action="thanks.php"  method="post">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_lastname">
        </div>
        <div>
            <label  for="prenom">Prénom :</label>
            <input  type="text"  id="prenom"  name="user_firstname">
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label  for="telephone">Téléphone :</label>
            <input  type="tel"  id="telephone"  name="user_telephone_number">
        </div>
        <div>
            <label  for="sujet">Sujet :</label>
            <select name="subject" id="sujet">
                <option value="">--Please choose an option--</option>
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="MySql">MySql</option>
                <option value="CSS">CSS</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>