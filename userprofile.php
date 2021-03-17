<div class="dropdown">
            <span onclick="myFunction()" class="dropbtn"><i class="fa fa-user-circle-o fa-2x"></i></span>
            <div id="myDropdown" class="dropdown-content">
                <a>Signed in As</a>
                <a><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $firstName ?></a>
                <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Help</a>
                <a><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a>
                <a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
            </div>
        </div>


        <script>
            function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        </script>