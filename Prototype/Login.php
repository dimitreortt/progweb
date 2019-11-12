<?php
    define("TITLE", "Login");
    include_once("Database.php");
?>

<!--// página de login-->
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card1">
            <div class="card-header">
                <h3>Acessar</h3>
            </div>
            <div class="card-body">
<!--                // formulario de login-->
                <form method="post" action="VerificaLogin.php">

<!--                    // campo usuário-->
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                    </div>

<!--                    // campo senha-->
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>

<!--                    // checkbox lembrar-->
                    <div class="row align-items-center remember">
                        <input type="checkbox">Lembrar
                    </div>

<!--                    // botão login-->
                    <div class="form-group">
                        <input class="btn float-right login_btn" type="submit" value="Login" role="button">Login</input>

                    </div>
                </form>
            </div>

<!--            // link "Cadastrar"-->
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Não possui uma conta?<a href="index?page=EscolhaCadastro&name=EscolhaCadastro">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>