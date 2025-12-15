<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Eyenix Eye Care</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: url("{{ asset('img/banner11.jpg') }}") no-repeat center center/cover;
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 30, 40, 0.55);
      backdrop-filter: blur(6px);
      z-index: 0;
    }

    .login-container {
      position: relative;
      z-index: 1;
      width: 420px;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(14px);
      border-radius: 22px;
      padding: 50px 40px;
      color: #fff;
      text-align: center;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.45);
      animation: fadeInUp 0.8s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(25px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .login-container img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      margin-bottom: 18px;
      object-fit: cover;
      box-shadow: 0 0 18px rgba(120, 220, 255, 0.6);
    }

    .login-container h2 {
      font-size: 26px;
      color: #7ce3ff;
      margin-bottom: 8px;
      font-weight: 600;
    }

    .login-container span {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.8);
      display: block;
      margin-bottom: 30px;
    }

    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    label {
      font-size: 14px;
      color: #7ce3ff;
      margin-bottom: 6px;
      display: block;
    }

    input {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      outline: none;
      font-size: 15px;
      background: rgba(255, 255, 255, 0.15);
      color: #fff;
      transition: 0.3s ease;
    }

    input:focus {
      background: rgba(255, 255, 255, 0.25);
      box-shadow: 0 0 10px rgba(124, 227, 255, 0.6);
    }

    input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    button {
      width: 100%;
      padding: 13px;
      margin-top: 10px;
      background: linear-gradient(135deg, #7ce3ff, #3bb4d8);
      border: none;
      border-radius: 10px;
      color: #00303f;
      font-size: 17px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      transform: scale(1.04);
      box-shadow: 0 12px 30px rgba(124, 227, 255, 0.5);
    }

    p {
      font-size: 13px;
      margin-top: 26px;
      color: rgba(255, 255, 255, 0.85);
    }

    a {
      color: #7ce3ff;
      text-decoration: none;
      font-weight: 500;
    }

    a:hover {
      text-decoration: underline;
    }

    .login-container:hover {
      box-shadow: 0 0 55px rgba(124, 227, 255, 0.35);
      transition: box-shadow 0.5s ease;
    }

    @media (max-width: 480px) {
      .login-container {
        width: 92%;
        padding: 38px 26px;
      }
    }
  </style>
</head>

<body>
  <div class="login-container">
    <img src="" alt="Eyenix Eye Care Logo" />

    <h2>Eyenix Eye Care</h2>
    <span>Clear Vision. Trusted Care.</span>

    <form action="" method="POST">
      @csrf
      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your registered email" required />
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
      </div>

      <button type="submit">Sign In</button>
    </form>

    <p>Forgot your password?
      <a href="">Reset here</a>
    </p>
  </div>
</body>

</html>
