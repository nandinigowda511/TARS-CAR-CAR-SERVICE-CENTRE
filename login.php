<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale">
        <title>Popup Form - Coding Tonight</title>
        <link rel="stylesheet"  href="css/login.css">
    </head>
    <body>
    

            <div class="wrapper">
                <a href="#" class="close">&times;</a>
                <div class="column details">
                    <div class="signin">
                        <h1>Sign in</h1>
                        <input type="email" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <a href="#">Forgot Password</a>
                        <button class="form-submit">Sign in</button>
                        <span>You don't have an account yet?<button id="signup">Create it now!</button></span>
                    </div>

                    <div class="signup">
                        <h1>Sign Up</h1>
                        <input type="name" placeholder="Full Name">
                        <input type="email" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <button class="form-submit">Sign in</button>
                        <span>Already have an account?<button id="signin">Sign In</button></span>
                    </div>

                    </div>

                    <div class="column content">
                    <div class="signin">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                    </div>

                    <div class="signup">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                    </div>
                </div>
            </div>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

            <script>
            $('.signup').hide();

            $('#signin, #signup').on(
                'click',
                function(){
                    $('.signin, .signup').toggle()
                }
            )
            </script>
        </div>
    </body>
</html>

