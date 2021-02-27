

    <nav class="navbar">
        <div class="logo_text">
            <a href="<?=$mappa ?? '' ?>../index.php">Carlo Lovassport Egyesület</a>
        </div>


        <ul class="navbar-list" id="navi-list">
            <li class="list-item">
                <a href="<?=$mappa ?? '' ?>../index.php">Főoldal</a>
            </li>
            <li class="list-item">
                <a href="">Bemutatkozás</a>
            </li>
            <li class="list-item">
                <a href="<?=$mappa?? ''?>gallery.php">Galéria</a>
            </li>
            <li class="list-item">
                <a href="">Szolgáltatás</a>
            </li>
            <li class="list-item">
                <a href="<?=$mappa ?? '' ?>map.php">Térkép</a>
            </li>
            <li class="list-item">
                <a href="<?=$mappa?? ''?>registration.php">Regisztráció</a>
            </li>
        </ul>
        <div class="toggle" id="toggle-button">
            <div class="toogle_list"></div>
            <div class="toogle_list"></div>
            <div class="toogle_list"></div>
        </div>
    </nav>
    <a href="https://www.facebook.com/CarloLovassportEgyesulet" class="fa fa-facebook"></a>
</body>

</html>