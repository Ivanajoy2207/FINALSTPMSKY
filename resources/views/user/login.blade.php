<link rel="stylesheet" href="{{ asset('css/auth.css') }}">


<div class="container">
  <form class="login-card" method="POST" action="{{ route('login.action') }}">
      @csrf
      <p class="title">Welcome Back !</p>
      @if ($errors->any())
          <div class="alert-danger">
                  @foreach ($errors->all() as $error)
                      <p>
                          {{ $error }}
                      </p>
                  @endforeach
          </div>
      @endif
      <div class="email-section">
          <p>Email</p>
          <div class="input-section">
              <input name="email" type="email" placeholder="  Masukkan email anda">
          </div>
      </div>
      <div class="password-section">
          <p>Password</p>
          <div class="input-section">
              <input name="password" type="password" placeholder="  Masukkan password anda">
          </div>
      </div>
      <div class="login-button">
          <button type="submit">Login</button>
      </div>
      <div class="change-to-register">
          <p>Don't have an account? <a href="register">Create one</a></p>
      </div>
  </form>

</div>
