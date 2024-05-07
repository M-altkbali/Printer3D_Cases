<header>
    <nav>
        <div class="logo">
            <img src="img/pIONEERS_LOGO.png" alt="" width="20%">
            <span class="title">3D PRINTER</span>
        </div>
        <ul>
            <li>
                <!-- <a><i class="fas fa-user-cog fa-user"></i></a> -->
                <a><img src="img/user.png" class="fas fa-user-cog fa-user"></a>

                <form action="logout.php" class="cont_user">

                    <span><?php echo "Admin"; ?></span>

                    <div class="toggle-container">
                        <input type="checkbox" id="switch" name="mode">
                        <label for="switch"></label>
                    </div>

                    <div class="trans">
                        <a href="#" class="translatear" id="ar">AR</a>
                        <a href="#" class="translateen" id="en">EN</a>
                    </div>

                    <button type="submit"> Log out </button>
                </form>
            </li>
        </ul>
    </nav>
</header>