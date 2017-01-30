<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="css/icon.css" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

  <style type="text/css">
    .parent {
      position: relative;
      height: 100vh;

    }
    .child {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0,0,0,0.5);
    }

    body{
      background-image: url('img/PSU-login.jpg');
      background-repeat:no-repeat;
      background-position:center;
      background-attachment: fixed;
      background-size: cover;
    }

    .set{

      margin: 20px 70px;
    }

  </style>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="parent card" >
  <div class="child card-content">
    <div class="row center">
      <h2 class="set white-text">Login</h2>
    </div>
    <div class="row">
      <div class="input-field white-text">
        <input  id="first_name" type="text" class="validate">
        <label for="first_name">User Name:</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field">
        <input id="password" type="password" class="validate">
        <label for="password">Password:</label>
      </div>
    </div>
    <div class="row center">
      <a href="staff" class="waves-effect waves-light btn"><i class="material-icons left">perm_identity</i>Login</a>
    </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

</body>
</html>
