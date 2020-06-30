<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<br>
<form action="{{ url('/store') }}" method="post">
    @csrf
    <label for="firstName">First name:</label><br>
    <input type="text" id="firstName" name="firstName"><br><br>

    <label for="lastName">Last name:</label><br>
    <input type="text" id="lastName" name="lastName"><br><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" value="other">
    <label for="other">Other</label><br><br>

    <label for="">Nationality:</label><br><br>
    <select id="nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Singapore">Singapore</option>
        <option value="Brunei">Brunei</option>
    </select><br><br>

    <label>Language Spoken:</label><br>
    <input type="checkbox" id="bIndo" value="Bahasa Indonesia">
    <label for="bIndo"> Bahasa Indonesia</label><br>
    <input type="checkbox" id="english" value="English">
    <label for="english">English</label><br>
    <input type="checkbox" id="bother" value="Other">
    <label for="bother">Other</label><br><br>

    <label for="bio">Bio:</label><br>
    <textarea id="bio" cols="30" rows="10"></textarea><br><br>

    <button type="submit">Sign Up</button>
</form>
</body>
</html>