<?= $this->Form->create(null, ['url' => ['controller' => 'Cita', 'action' => 'rango']]) ?>
<?= $this->Form->date('fecha_inicio') ?>
<?= $this->Form->date('fecha_fin') ?>
<?= $this->Form->button('Mostrar') ?>
<?= $this->Form->end() ?>




<table>
    <tr>
        <th>Fecha</th>
        <th>Nombre</th>
    </tr>
    <?php foreach ($citas as $citum) : ?>
        <tr>
            <td><?= $citum->fecha ?></td>
            <td><?= $citum->servicio->service ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<p>Cantidad de servicios repetidos:</p>
<ul>
    <?php foreach ($serviciosRepetidos as $servicio) : ?>
        <li><?= $servicio['nombre'] ?> = <?= $servicio['cantidad'] ?></li>
    <?php endforeach; ?>
</ul>