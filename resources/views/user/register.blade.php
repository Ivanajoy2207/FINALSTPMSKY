<link rel="stylesheet" href="{{ asset('css/auth.css') }}">


<div class="container">
    <form class="login-card" method="POST" action="{{ route('register.action') }}">
        @csrf
        <p class="title">Register Now !</p>
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
            <p>Username</p>
            <div class="input-section">
                <input name="name" type="text" placeholder="  Masukkan nama anda">
            </div>
        </div>
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
        <div class="password-section">
            <p>Password Confirmation</p>
            <div class="input-section">
                <input type="password" name="password_confirmation" placeholder="  Masukkan password anda"/>
            </div>
        </div>
        <div class="login-button">
            <button type="submit">Register</button>
        </div>
        <div class="change-to-register">
            <p>Have an account ? <a href="login">Make one</a></p>
        </div>
    </form>

</div>