<!DOCTYPE html>
<html data-theme="dark">
<head>
    <link rel="stylesheet" href="/pico.min.css">
    <title>Form</title>
</head> `
<body>
    <main class="container">

        <form method="post">
            <?php if(!empty($_POST)): ?>
                <h2><?php 
                    if ($currentHour >= 2 && $currentHour  <= 11) {

                        $greeting = 'Good Morning  '.$_POST['name'].'. Your favourite food is '. $_POST['food'].'.';
                    }
                    elseif ($currentHour > 11 && $currentHour  <= 16) {

                        $greeting = 'Good Afternoon '. $_POST['name'].'. Your favourite food is '. $_POST['food'].'.';

                    }
                    elseif ($currentHour > 16 && $currentHour <= 21) {

                        $greeting = 'Good Evening '. $_POST['name'].'. Your favourite food is '.$_POST['food'].'.';

                    } 
                    else {

                        $greeting = 'Good Night '. $_POST['name'].'. Your favourite food is '. $_POST['food'];

                    }
                    
                    
                    echo $greeting;
                    ?>
                    

                    </h2>
            <?php endif; ?> 

            <label for="name">Name</label>
            <input type='text' name="name" id="name">


            <label for="Favourite Food">Choose your Favourite Food : </label>
        
    
            <label>
            <input type="radio" name="food" value="Chilli Paneer">
            Chilli Paneer
            </label>

            <br>

            <label>
            <input type="radio" name="food" value="Sandwiches">
            Sandwiches
            </label>

            <br>

            <label>
            <input type="radio" name="food" value="Pulao">
            Pulao
            </label>

            <br>
            <input type='submit'>
        </form>

    </main>
</body>
</html>