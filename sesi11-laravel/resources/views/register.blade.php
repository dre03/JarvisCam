<!DOCTYPE html>
<html>
<head>
    <title>Buat Acoount Baru</title>
</head>
<body>
    <form action="/welcome" method="POST">
        @csrf
        <h2>Buat Account Baru!</h2>
        <p>Sign Up Form</p>
        First Name : <br><br>
        <input type="text" name="namadepan"> <br><br>
        Last Name : <br><br>
        <input type="text" name="namabelakang"> <br><br>
        Gender : <br><br>
        <input type="radio"><label>Male</label> <br>
        <input type="radio"><label>Famale</label> <br>
        <input type="radio"><label>Other</label> <br><br>
        Nationality <br><br>
        <select>
            <option value="">Indonesia</option>
            <option value="" >Arabsaudi</option>
            <option value="">Palstina</option>
          </select> <br><br>
        Language Spoken : <br><br>
        <input type="checkbox"><label>I have a bake</label><br>
        <input type="checkbox"><label>I have a car</label><br>
        <input type="checkbox"><label>I have a boat</label><br><br>
        Bio : <br><br>
        <textarea rows="7" cols="35"></textarea><br><br>
        <button type="submit">Sign UP</button>
    </form>

</body>
</html>