<div class="header">
<!-- barra de navegação sem login -->
    <?php if(logged(false)): ?>
        <nav class="nav-logged-out">
                <a class="logo" href="/"><img class="img-logo" src="/asset/img/logo/beija-flor.png" alt="logo"><h2 class="title-hotel">Hotel Beija-Flor</h2></a>
                <ul class="nav-list">
                    <a href="/"><li>Ínicio</li></a>
                    <a href="#"><li>Súites</li></a>
                    <a href="#"><li>Pacotes</li></a>
                    <a href="#"><li>Lazer</li></a>
                    <a href="#"><li>Gastronomia</li></a>
                    <a href="#"><li>Eventos</li></a>
                </ul>
                <div class="nav-conection">
                    <a href="/login"><button id="nav-login" type="submit">Login</button></a>
                    <a href=""><button id="nav-register" type="submit">Cadastrar</button></a>
                </div>
        </nav>
    <?php else: ?>
    <!-- barra de navegação logado -->
        <nav class="nav-logged-in">
                <a class="logo" href="/user/home"><h2 class="title-hotel">Hotel Beija-Flor</h2><img class="img-logo" src="/asset/img/logo/beija-flor.png" alt="logo"></a>
                <div class="nav-profile">
                    <div>
                        <p class="nav-type-profile">Admin</p>
                        <p class="nav-name">Junior</p>
                    </div>
                    <a class="profile-image" href="#"><img src="/asset/img/profile/profile-pic.png" alt=""></a>
                </div>
                <a href="/logout">sair</a>
        </nav>
    <?php endif ?>
</div>
