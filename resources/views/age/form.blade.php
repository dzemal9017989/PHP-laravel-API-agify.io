<!DOCTYPE html>
<html>
<head>
    <title>Leeftijd Schatting</title>
    <style>
    body {
        background-color: aqua;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: red;
        width: 100%;
        position: fixed;
        top: 0;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a.active:hover {
        background-color: lightblue;
    }

    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 60px; /* Adjust this value if needed */
        width: 100%;
    }

    .form-container form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px; /* Adjust this value if needed */
    }

    .form-container label,
    .form-container input,
    .form-container button {
        margin: 10px 0;
        width: 100%;
    }

    .form-container button {
        background-color: red;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        text-align: center;
    }

    .form-container button:hover {
        background-color: darkred;
    }
    </style>
</head>
<body>
<ul>
  <li><a href="#dzemal">Dzemal Nikocevic</a></li>
  <li style="float:right"><a class="active" href="#about">Over ons</a></li>
</ul>
    <div class="form-container">
        <form action="/age" method="GET">
            <label for="name"><h1>Voer een naam in:</h1></label>
            <input type="text" name="name" id="name" required>
            <button type="submit" class="button">Schat leeftijd</button>
        </form>
    </div>
</body>
</html>
