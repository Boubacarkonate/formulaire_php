<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE ENVOI</title>
</head>

<body>
    <h1>ENVOI</h1>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="./formulaire_receive.php" method="post">
            <label for="nom">Nom : </label>
            <input type="text" name="nom">
            <br>
            <br>
            <label for="genre">Genre : </label>
            <input type="radio" name="genre" id="" value="femme">
            <label for="femme">Femme</label>
            <input type="radio" name="genre" id="" value="homme">
            <label for="homme">Homme</label>
            <br>
            <br>
            <label for="nationality">Nationalité :</label>
            <select name="nationality" id="nationality">
                <option value="">VIDE</option>
                <option value="française">Française</option>
                <option value="allemande">Allemande</option>
                <option value="Espagnole">Espagnole</option>
                <option value="Anglais">Anglais</option>
            </select>
            <br>
            <br>
            <fieldset>
                <legend>Pays à visiter :</legend>


                <input type="checkbox" id="" name="pays[]" value="France"/>
                <label for="france">France</label>


                <input type="checkbox" id="" name="pays[]" value="Allemagne"/>
                <label for="Germany">Allemagne</label>

                <input type="checkbox" id="" name="pays[]" value="Espagne"/>
                <label for="Spain">Espagne</label>

                <input type="checkbox" id="" name="pays[]" value="Angleterre"/>
                <label for="England">Angleterre</label>



            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend>Langues Parlées :</legend>


                <input type="checkbox" id="" name="langue[]" value="français" />
                <label for="french">Français</label>


                <input type="checkbox" id="" name="langue[]" value="allemand"/>
                <label for="german">Allemand</label>

                <input type="checkbox" id="" name="langue[]"  value="espagnol"/>
                <label for="spanish">Espagnol</label>

                <input type="checkbox" id="" name="langue[]" value="anglais"/>
                <label for="english">Anglais</label>



            </fieldset>

            <br>
            <br>
            <input type="submit" value="ENVOYER">
            <input type="reset" value="EFFACER">


        </form>

    </body>

    </html>
</body>

</html>