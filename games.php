<?php 

require_once __DIR__ . '/classes/products.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Games</h1>
            <h2>List of videogames</h2>
        </header>
        <main>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Genere</th>
                        <th>Prezzo</th>
                        <th>Prezzo per i membri aderenti al programma "VIP"</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td><?php echo $product1->name; ?></td>
                        <td><?php echo $product1->genre; ?></td>
                        <td><?php echo $product1->price; ?>€</td>
                        <td><?php echo $product1->get_vip_price(); ?>€</td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $product2->name; ?></td>
                        <td><?php echo $product2->genre; ?></td>
                        <td><?php echo $product2->price; ?>€</td>
                        <td><?php echo $product2->get_vip_price(); ?>€</td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $product3->name; ?></td>
                        <td><?php echo $product3->genre; ?></td>
                        <td><?php echo $product3->price; ?>€</td>
                        <td><?php echo $product3->get_vip_price(); ?>€</td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $product4->name; ?></td>
                        <td><?php echo $product4->genre; ?></td>
                        <td><?php echo $product4->price; ?>€</td>
                        <td><?php echo $product4->get_vip_price(); ?>€</td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $product5->name; ?></td>
                        <td><?php echo $product5->genre; ?></td>
                        <td><?php echo $product5->price; ?>€</td>
                        <td><?php echo $product5->get_vip_price(); ?>€</td>
                    </tr>
                </tbody>
            </table>

            <a href="/php-oop-2/">Torna alla HomePage</a>
        </main>
    </div>
</body>
</html>