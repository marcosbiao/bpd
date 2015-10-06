       <?php  
    switch ($_SESSION['UsuarioNivel']){
        case 0://ainda sem função
            
            break;
        case 1://administrador geral do sistema
            include("cabecario.html");
            break;
        case 2://coordenador dos programas
            include("cabecarioCoordenador.html");
            break;
        case 3://organizador de bolsas
            
            break;
        case 4://organizador de diarias e passagens
            
            break;
        case 5:
            
            break;
        default :
            header("Location: index.php"); 
            exit;
    }
    ?>