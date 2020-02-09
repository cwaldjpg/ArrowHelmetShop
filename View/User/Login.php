<div id="login-box" class="module form-module">
  <div class="toggle"></div>
    <div class="form">
      <h2>Login to your account</h2>
      <form action="index.php?mod=User&act=login" method="post">
        <input type="email" name="user" placeholder="Email" required/>
        <input type="password" name="pass" placeholder="Password" required/>
        <input type="submit" value="Login" class="button"/>
      </form>
      <div class="cta">Sign in</div>
    </div>
  
    <div class="form">
      <h2>Create an account</h2>
      <form action="index.php?mod=User&act=signin" method="post">
        <input type="email" name="email" placeholder="Email" required/>
        <input type="text" name="name" placeholder="Name" required/>
        <input type="password" name="pass" placeholder="Password" required/>
        <input type="password" name="cpass" placeholder="Confirm Password" required/>
        <input type="tel" name="phonenum" placeholder="Phone Number" required/>
        <input type="text" name="add" placeholder="Address" required/>
        <input type="submit" value="Sign in" class="button"/>
      </form>
    <div class="cta">Login</div>
  </div>
</div>