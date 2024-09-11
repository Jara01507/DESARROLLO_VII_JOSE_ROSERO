<?php
include 'funciones_tienda.php';

// Lista de precios de productos
$precios = [
    'camisa' => 50,
    'pantalon' => 70,
    'zapatos' => 80,
    'calcetines' => 10,
    'gorra' => 25
];

// Carrito de compras
$carrito = [
    'camisa' => 2,
    'pantalon' => 1,
    'zapatos' => 1,
    'calcetines' => 3,
    'gorra' => 0
];

// Calcular el subtotal
$subtotal = 0;
foreach ($carrito as $producto => $cantidad) {
    $subtotal += $precios[$producto] * $cantidad;
}

// Calcular el descuento
$descuento = calcular_descuento($subtotal);

// Calcular el impuesto
$impuesto = aplicar_impuesto($subtotal);

// Calcular el total
$total_a_pagar = calcular_total($subtotal, $descuento, $impuesto);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Compra</title>
</head>
<body>
    <h1>Resumen de Compra</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carrito as $producto => $cantidad): ?>
                <?php if ($cantidad > 0): ?>
                    <tr>
                        <td><?php echo $producto; ?></td>
                        <td><?php echo $cantidad; ?></td>
                        <td><?php echo '$' . number_format($precios[$producto], 2); ?></td>
                        <td><?php echo '$' . number_format($precios[$producto] * $cantidad, 2); ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><strong>Subtotal:</strong> $<?php echo number_format($subtotal, 2); ?></p>
    <p><strong>Descuento:</strong> $<?php echo number_format($descuento, 2); ?></p>
    <p><strong>Impuesto:</strong> $<?php echo number_format($impuesto, 2); ?></p>
    <p><strong>Total a Pagar:</strong> $<?php echo number_format($total_a_pagar, 2); ?></p>
</body>
</html>
