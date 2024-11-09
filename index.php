<?php include('layouts/header.php'); ?>

<div class="container">
    <h1>Descubra seu signo:</h1>
    <hr>
    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" placeholder="Ex.: 21/05/1992" required>
        </div>
        <button type="submit" class="btn btn-primary">Descobrir</button>
    </form>
</div>