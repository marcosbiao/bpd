       <?php  
    switch ($_SESSION['UsuarioNivel']){
        case 0://ainda sem função
            
            break;
        case 1://administrador geral do sistema
            include("cabecario.html");
            break;
        case 2:
            include("cabecarioCoordenador.html");
            break;
    }
    ?>