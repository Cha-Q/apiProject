<?php
$title= 'Home of Api';
$function = 'nav/nav_functions.php';
require 'views/elements/header.php';
require 'class/GetApi.php';

// $apiK = 
?>


    <form class="flex-column form-control col-md-6 offset-md-3" method='POST'>
        <div class="form-group">
            <label for='urlApi'>
                Entrez l'adresse de l'Api que vous désirez utiliser :
            </label>
            <input type="text" class="form-control" name='urlApi' id='urlApi' value='https://api.openweathermap.org/data/2.5/forecast?q=Montpellier,fr&cnt=5&appid=<?= $apiK ?>' required>
        </div>
        <div class="form-group">
            <label for='apiKey'>
                Entrez la clé d'Api (si besoin) :
            </label>
            <input type="text" name='apiKey' id='apiKey' class="form-control" >
        </div>
        <button class="btn btn-primary">Valider</button>
    </form>

    <?php if(isset($_POST['urlApi'])) : ?>  
        <?php $api = new GetApi($_POST['urlApi']);
        var_dump($api->apiRequest());
        ?>
    <?php endif ?>
<?php
require 'views/elements/footer.php';

?>
