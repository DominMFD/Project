<?php include('layouts/header.php'); ?>

<?php
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");

function descobrirSigno($data_nascimento, $signos) {
    $dataNascimentoFormatada = date("m-d", strtotime($data_nascimento));
    foreach ($signos->signo as $signo) {
        $dataInicio = DateTime::createFromFormat("d/m", $signo->dataInicio)->format("m-d");
        $dataFim = DateTime::createFromFormat("d/m", $signo->dataFim)->format("m-d");

        if ($dataNascimentoFormatada >= $dataInicio && $dataNascimentoFormatada <= $dataFim) {
            return $signo;
        }
    }
    return null;
}

$signoEncontrado = descobrirSigno($data_nascimento, $signos);
?>

<div class="result-container">
    <?php if ($signoEncontrado): ?>
        <h1><?php echo $signoEncontrado->signoNome; ?></h1>
        <p><?php echo $signoEncontrado->descricao; ?></p>
    <?php else: ?>
        <p>Não foi possível determinar o seu signo.</p>
    <?php endif; ?>
    <a href="index.php" class="btn btn-light mt-4">Voltar</a>
</div>
