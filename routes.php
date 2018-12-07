<?php


function call($controller, $action)
{
    require_once('controller/c_'.$controller.'.php');

    switch ($controller) {
        case 'home':
            $controller = new HomeController();
            require_once ('model/m_home.php');
            require_once('model/m_ask.php');
            require_once('model/m_story.php');
            require_once ('model/m_animal.php');
            require_once ('model/m_user.php');

            break;
        case 'login':
            $controller = new LoginController();
            require_once ('model/m_home.php');
            require_once ('model/m_login.php'); 
            break;
        case 'animal':
            $controller = new AnimalController(); 
            require_once ('model/m_animal.php');
            break;
        case 'story':
            $controller = new StoryController();
            require_once ('model/m_story.php');
            break;  
    }
    $controller->{$action}();
} 

call($controller, $action);
?> 