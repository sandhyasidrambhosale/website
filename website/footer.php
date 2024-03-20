<footer class="page-footer" style="background-color:#e1bee7;">
    <h2 class="center-align" id="places" style="color:#ffffff;font-family: 'Ubuntu', sans-serif;font-size:36px;">Contact Us
        <center>
            <div class="dash"></div>
        </center>
    </h2>
    <div class="row">
        <div class="col s12 m6 l6">
            <div class="row">
                <div class="col s2"></div>
                <div class="col s1">
                    <i class="material-icons" style="color:#F86960;position:relative;top:23px;font-size:37px;">call</i>
                </div>
                <div class="col s9">
                    <span style="position:relative;top:24px;font-size:17px;">  +91-9767662618</span><br>
                    <span style="position:relative;top:24px;font-size:17px;">  +91-7720011670</span>
                </div>
            </div>
            <div class="row">
                <div class="col s2"></div>
                <div class="col s1">
                    <i class="material-icons" style="color:#F86960;position:relative;top:23px;font-size:37px;">mail</i>
                </div>
                <div class="col s8">
                    <span style="position:relative;top:28px;font-size:17px;"> sandhyabhosale29@gmail.com</span>
                </div>
            </div>
        </div>
        <form class="col s12 m6 l6" action="contact_process.php" method="post">
            <div class="row">
                <div class="col s1"></div>
                <div class="input-field col s4">
                    <input id="name" type="text" class="validate" name="name" style="border-color:white;" required>
                    <label for="name" style="color:white;font-size:18px;">Name</label>
                </div>
                <div class="col s1"></div>
                <div class="input-field col s4">
                    <input id="contact" type="text" class="validate" name="contact" style="border-color:white;" required>
                    <label for="contact" style="color:white;font-size:18px;">Contact</label>
                </div>
                <div class="col s2"></div>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="input-field col s9" style="top:-30px;">
                    <input id="email" type="email" class="validate" name="email" style="border-color:white;" required>
                    <label for="email" style="color:white;font-size:18px;">Email</label>
                </div>
                <div class="col s2"></div>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="input-field col s9" style="top:-60px;">
                    <textarea id="textarea1" class="materialize-textarea" name="message" style="border-color:white;" required></textarea>
                    <label for="textarea1" style="color:white;font-size:18px;">Message</label>
                </div>
                <div class="col s2"></div>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="col s9" style="position:relative;top:-70px;">
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="background-color:#F86960;">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <div class="col s2"></div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col l6 s12" style="position:relative;top:-50px;">
                <h5 class="white-text" style="font-family: 'Acme', sans-serif;left:0px;position:relative;">Explore the Cultural and Heritage beauty of</h5>
                <img src="images/india.png" style="height:65px;width:330px;top:80px;left:482px;">
            </div>
            <div class="col l4 offset-l2 s12" style="position:relative;top:-50px;">
                <h5 class="white-text">Connect With Us</h5>
                <a class="grey-text text-lighten-3" href="#!"><img src="images/facebook.png" class="facebook" style="position:relative;height:35px;width:40px;left:-15px"></a>
                <a class="grey-text text-lighten-3" href="#!"><img src="images/instagram.png" class="instagram" style="position:relative;height:33px;width:33px;left:0px;top:2px"></a>
                <a class="grey-text text-lighten-3" href="#!"><img src="images/youtube.png" class="youtube" style="position:relative;height:37px;width:37px;left:17px;top:3px"></a>
            </div>
        </div>
    </div>
    <div class="footer-copyright" id="footer">
        <div class="container">
            <?php
                $year=date("Y");
                echo "© ".$year." Copyright Text";
                ?>
        </div>
    </div>
</footer>