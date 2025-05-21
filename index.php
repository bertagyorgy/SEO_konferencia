<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regisztráció</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #89f7fe, #66a6ff);
      min-height: 100vh;
    }

    .form-wrapper {
      display: flex;
      justify-content: center;
      margin-top: 10px;
      padding: 20px;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 700px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px 30px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
      color: #444;
      font-size: 0.95em;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    input[type="text"],
    input[type="date"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    input[type="file"] {
      padding: 8px 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 0.95em;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    input[type="password"]:focus {
      border-color: #66a6ff;
      outline: none;
    }

    .form-submit {
      margin-top: 25px;
      text-align: center;
    }

    input[type="submit"] {
      padding: 10px 25px;
      border: none;
      border-radius: 6px;
      background-color: #66a6ff;
      color: white;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #558cd8;
    }

    @media (max-width: 600px) {
      .form-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

<div class="form-wrapper">
  <div class="form-container">
    <h1>Regisztráció</h1>
    <form action="/submit_registration" method="post" enctype="multipart/form-data">
      <div class="form-grid">

        <div class="form-group">
          <label for="fullname">Teljes név:</label>
          <input type="text" id="fullname" name="fullname" required>
        </div>

        <div class="form-group">
          <label for="dob">Születési dátum:</label>
          <input type="date" id="dob" name="dob" required>
        </div>

        <div class="form-group">
          <label for="country">Ország:</label>
          <input type="text" id="country" name="country" required>
        </div>

        <div class="form-group">
          <label for="city">Város:</label>
          <input type="text" id="city" name="city" required>
        </div>

        <div class="form-group">
          <label for="email">E-mail cím:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="phone">Telefonszám:</label>
          <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
          <label for="username">Felhasználónév:</label>
          <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
          <label for="password">Jelszó:</label>
          <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
          <label for="profilepic">Profilkép:</label>
          <input type="file" id="profilepic" name="profilepic" required>
        </div>

      </div>

      <div class="form-submit">
        <input type="submit" value="Regisztráció">
      </div>
    </form>
  </div>
</div>

</body>
</html>
