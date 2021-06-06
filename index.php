<?php 

require_once __DIR__ . '/classes/user.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videogames</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Games</h1>
            <h2>Users</h2>
        </header>
        <main>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Eta'</th>
                        <th>Email</th>
                        <th>Registrato al programma "VIP"</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td><?php echo $user1->name; ?></td>
                        <td><?php echo $user1->lastName; ?></td>
                        <td><?php echo $user1->age; ?></td>
                        <td><?php echo $user1->email; ?></td>
                        <td><?php echo $user1->get_vips(); ?></td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $user2->name; ?></td>
                        <td><?php echo $user2->lastName; ?></td>
                        <td><?php echo $user2->age; ?></td>
                        <td><?php echo $user2->email; ?></td>
                        <td><?php echo $user2->get_vips(); ?></td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $user3->name; ?></td>
                        <td><?php echo $user3->lastName; ?></td>
                        <td><?php echo $user3->age; ?></td>
                        <td><?php echo $user3->email; ?></td>
                        <td><?php echo $user3->get_vips(); ?></td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $user4->name; ?></td>
                        <td><?php echo $user4->lastName; ?></td>
                        <td><?php echo $user4->age; ?></td>
                        <td><?php echo $user4->email; ?></td>
                        <td><?php echo $user4->get_vips(); ?></td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $user5->name; ?></td>
                        <td><?php echo $user5->lastName; ?></td>
                        <td><?php echo $user5->age; ?></td>
                        <td><?php echo $user5->email; ?></td>
                        <td><?php echo $user5->get_vips(); ?></td>
                    </tr>
                </tbody>
            </table>

            <a href="/php-oop-2/games.php">Lista prezzi</a>
        </main>
    </div>
</body>
</html>