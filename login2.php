<html lang="en" dir="ltr"><head>
    <meta charset="utf-8">
    <title>保育&幼稚園NAVI</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> </head><body>
    <link rel="stylesheet" href="static/assets/css/style.css">
    <link rel="stylesheet" href="static/assets/css/image.css">
    <link rel="stylesheet" href="static/assets/css/login_page.css">
  
  
  
    <!-- Navbar -->
    <div class="navbar-fixed">
      <!-- Dropdown Structure -->
      <nav class="">
        <div class="nav-wrapper row">
          <div class="col s5 l4 offset-s1 offset-l1">
            <a href="/" class="brand-logo">保育&幼稚園NAVI</a>
          </div>
          <div class="col s5 l6">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="/login_page" class="">ログイン</a></li>
              <li><a href="/ranking/" class="">今週の保育幼稚園ランキング</a></li>
              <li><a href="/image" class="">子育て記事</a></li>
              <li><a href="/udemy" class="">お問い合せ</a></li>
              <!-- <li><a href="https://scraping-for-beginner.readthedocs.io/" target="”_blank”" class=""></a></li> -->
            </ul>
          </div>
        </div>
      </nav>
    </div>
  
    
  
    <div class="section"></div>
    <main>
      <center>
  
        
        <h5 class="login-message">ログインしてください</h5>
        
        <div class="section"></div>
  
        <div class="container">
          <div class="z-depth-1 white row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          
            <form method="get" action="navi.php" id="login" class="col s12" style="width:300px;" method="post">
              <div class="row">
                <div class="col s12">
                </div>
              </div>
  
              <div class="row">
                <div class="input-field col s12">
                  <input class="validate" type="text" name="username" id="username">
                  <label for="username">Enter your username</label>
                </div>
              </div>
  
              <div class="row">
                <div class="input-field col s12">
                  <input class="validate" type="password" name="password" id="password">
                  <label for="password">Enter your password</label>
                </div>
              </div>
  
              <br>
              <center>
                <div class="row">
                  <button type="submit" name="btn_login" id="login-btn" class="col s8 offset-s2 btn btn-large waves-effect">Login</button>
                </div>
              </center>
            </form>
          </div>
        </div>
      </center>
  
      <div class="section"></div>
      <div class="section"></div>
    </main>
  
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".dropdown-trigger").dropdown();
      });
    </script>
  
  
  
  </body></html>