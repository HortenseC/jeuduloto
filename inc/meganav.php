 <?php
 if (! isset($_GET['page'])){
        require 'inc/contenthome.php';
    } else {
        switch ($_GET ['page']) {
            case 'equipe':
                require 'inc/contentteam.php';
                break;
            
            default:
                require 'inc/contentcontact.php';
                break;
        }
    };
    ?>