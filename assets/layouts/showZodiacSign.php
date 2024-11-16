<?php include('header.php'); ?>

<div class="container mt-5">
    <h1>Seu signo é: </h1>
<?php

$dataNascimento = $_POST['dataNascimento'];
$signos = simplexml_load_file("signos.xml");
$dataNascimento = new DateTime($dataNascimento);
$signoEncontrado = false;

foreach ($signos->signo as $signo) {
    $dataInicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
    $dataFim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);

    // Define o ano atual para as datas de início e fim
    $dataInicio->setDate($dataNascimento->format('Y'), $dataInicio->format('m'), $dataInicio->format('d'));
    $dataFim->setDate($dataNascimento->format('Y'), $dataFim->format('m'), $dataFim->format('d'));

    // Ajusta o ano de término se o intervalo ultrapassar o ano
    if ($dataInicio > $dataFim) {
        $dataFim->modify('+1 year');
    }

    // Verifica se a data de nascimento está no intervalo do signo
    if ($dataNascimento >= $dataInicio && $dataNascimento <= $dataFim) {
        echo "<h2>{$signo->signoNome}</h2>";
        echo "<p>{$signo->descricao}</p>";
        $signoEncontrado = true;
        break;
    }
}

if (!$signoEncontrado) {
    echo "<p>Não foi possível determinar seu signo. Verifique a data informada.</p>";
}
?>
    <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
</div>
