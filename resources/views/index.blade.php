@include("partials.header")
    
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <button id="loginButton">Show Login Form</button>
    <form action="/action_page.php" method="post" style="display: none;">
        <div class="imgcontainer">
            <center>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-UGb6g9wOEv1OcSwAGoDpLI7uxzPrrcqnngjODVVP7TAUMTrJ3jO02u8jJ5Ex-qkIo1o&usqp=CAU" alt="Avatar" class="avatar">
            </center>
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
              
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
      <script>
        document.getElementById('loginButton').addEventListener('click', function() {
            var loginForm = document.getElementById('loginForm');
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
            } else {
                loginForm.style.display = 'none';
            }
        });
    </script>
@include("partials.footer")