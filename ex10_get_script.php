<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Get</h1>
    <form action="ex10_get.php" method="get">
        <label for="nom">nom :</label>
        <input type="text" id="nom" name="nom" require >
        <br>
        <label for="prenom">prenom :</label>
        <input type="text" id="prenom" name="prenom" require >
        <br>

        <select name="groupe" id="groupe" require >
            <option value="1">G1</option>
            <option value="2">G2</option>
            <option value="3">G3</option>
            <option value="4">G4</option>
        </select>

        <button type="submit">submit</button>
    </form>
</body>
</html>