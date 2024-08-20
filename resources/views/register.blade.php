<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="/welcome" method="get">
<h1>Sign Up Form</h1>
    <p>First Name :</p>
    <input type="text" id="first_name" name="first_name">
    <p>Last Name :</p>
    <input type="text" id="last_name" name="last_name">
    <p>Gender :</p>
    <input type="radio" name="Gender" id="Male"><label for="Male">Laki-laki</label>
    <br>
    <input type="radio" name="Gender" id="Male"><label for="Male">Perempuan</label><br>
    <input type="radio" name="Gender" id="Male"><label for="Male">Emang ada gender lain?</label>
    <p>Nationality :</p>

    <select name="Nationality" id="Nationality">
        <option value="Indog">Indonesia</option>
        <option value="Malaysial">Malaysia</option>
        <option value="Singadog">Singapore</option>
        <option value="Putang Ina">Philipina</option>
    </select>

    <p>Language Spoken</p>
    <input type="checkbox"><label for="Bahasa">Indonesia</label> <br>
    <input type="checkbox"><label for="Inggris">Inggris</label> <br>
    <input type="checkbox"><label for="Melayu">Melayu</label> <br>

    <p>Bio :</p>
    <textarea name="Bio" rows="10" cols="30" ></textarea><br>
    <button type="submit">Sign In</button>
</form>

</body>
</html>