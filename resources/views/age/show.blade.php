<!DOCTYPE html>
<html>
<head>
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
      }

      .form-container label,
      .form-container input,
      .form-container button {
          margin: 10px 0;
      }
    </style>
    <title>Leeftijd Schatting</title>
</head>
<body>
<ul>
  <li><a href="#dzemal">Dzemal Nikocevic</a></li>
  <li style="float:right"><a class="active" href="#about">Over ons</a></li>
</ul>
    <p>De geschatte leeftijd voor {{ $ageData['name'] }} is {{ $ageData['age'] }} jaar.</p>
    <a href="/">Terug</a>
</body>
</html>
