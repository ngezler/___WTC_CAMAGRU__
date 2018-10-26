<?php
include_once 'head.php';
?>

    <body class="no-padding">
        <main class="login">
            <div class="login__column">
                <img src="images/phone.png" alt="Phone Image"title="Phone Image"class="login__phone-image"/>                
            </div>
            <section class="login__column">
                <div class="login__section login__sign-in">
                    <img src="images/logo.png" title="Go to login" class="login__logo"/>
                    <!-- x   -->
                    <form method="POST" action="feed.html" class="login__form">
                        <div class="login__input-container">
                            <input 
                                type="text"
                                name="username"
                                placeholder="Username"
                                required
                                class="login__input"
                            />
                        </div>
                        <div class="login__input-container">
                            <input type="password" name="password" placeholder="Password" required class="login__input"/>
                            <a href="reset.php" class="login__form-link">Forgot?</a>
                        </div>
                        <div class="login__input-container">
                            <input type="submit" value="Log in" name="submit" class="login__input login__input--btn"/>
                        </div>

                         <div class="login__input-container">
                          <a href="reset.php"><input type="button" value="Forgot password" style="background-color:grey;" name="reset" class="login__input login__input--btn"/><a>
                        </div> 

                    </form>
                </div>
                <div class="login__section login__sign-up">
                    <span class="login__text">
                        Don't have an account? 
                        <a href="signup.php" class="login__link">Sign up</a>
                    </span>
                </div>
                <div class="login__section login__section--transparent login__app">
                    <span class="login__text">
                        Get the app.
                    </span>
                    <div class="login__appstores">
                        <img 
                            src="images/ios.jpg"
                            alt="iOS"
                            title="Get the app!"
                            class="login__appstore" 
                        />
                        <img 
                            src="images/android.png"
                            alt="Android"
                            title="Get the app!"
                            class="login__appstore" 
                        />
                    </div>
                </div>
            </section>
        </main>
    <?php
        include_once 'footer.php';
    ?>