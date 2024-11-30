<?php logged('false') ?>
<div class="login-container">
        <div class="login-content">
            <div class="login-form">
                <h3>Login</h3>
                <form action="/login" method="post">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" value="12345678" placeholder="Digite o seu CPF">
                    <label for="passwold">Senha:</label>
                    <input type="password" name="passwold" id="passwold" value="12345678" placeholder="Digite a sua senha">
                    <input type="submit" value="Entrar">
                </form>
            </div>  
            <div class="login-img">
                <img src="/asset/img/login.png" alt="">
            </div>
        </div>
</div>