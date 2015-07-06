<!DOCTYPE html>
 <html>
   <head>
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
<body class= "lime">
  <div class="container">
    <h1>Learning Javascript</h1>
    <div class="row">
      <div class="input-field col l10">
        <input id ="name" type ="text">
      </div>
      <div class="col l2">
        <button class="btn waves-effect waves-light" onmouseover="fill()" onclick="check()">Submit LOL</button>
      </div>
    </div>
    <div class="row">
      <div class="col l5">
        <p id ="InResult"> Please Enter Your Name</p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/dap.js"></script>
</body>
</html>
