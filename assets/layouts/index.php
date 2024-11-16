<!DOCTYPE html>
<html lang="pt-br"></html>
<?php include('header.php'); ?>
<body>
    <div class="container mt-5">
        <h1 style="text-align: center;">Quer descobrir seu Signo?</h1>
            <form id="signo-form" method="POST" action="showZodiacSign.php" class="mt-4">
                <div class="mb-3">
                    <label for="dataNascimento" class="form-label">Digite sua data de Nascimento</label> <br>
                    <input type="date" class="form-control" id="dataNascimento"
                    name="dataNascimento" required>
                </div>
                 <button type="submit" class="btn btn-primary">Descobrir Signo</button>
            </form>
    </div>
</body>
</html>
