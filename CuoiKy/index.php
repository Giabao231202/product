<?php 
    require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'login':
                    require_once 'login.php';
                    break;    

                case 'danhsach':
                    require_once 'danhsach.php';
                    break;          
                
                case 'them':
                    require_once 'them.php';
                    break;
                    
                case 'sua':
                    require_once 'sua.php';
                    break;
                        
                case 'xoa':
                    require_once 'xoa.php';
                    break;    

                default:
                    require_once 'login.php';
                    break;
            } 
        }else {
                require_once 'login.php';
            }
    ?>
</body>
</html>