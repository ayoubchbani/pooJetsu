<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home View</title>
</head>
<body>
    <h1>Home View</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui reprehenderit consectetur facilis blanditiis praesentium dolor vitae dicta enim rerum, iste commodi debitis eos consequuntur laboriosam consequatur rem voluptatem! Dolor, quam.</p>
    <?php
        foreach ($users as $key => $user) {
           echo $user->email .'<br>'; 
        }

    ?>
</body>
</html>