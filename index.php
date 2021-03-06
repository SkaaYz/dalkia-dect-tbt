<?php
    # Requires
    namespace App\controller;
    include_once 'vendor/autoload.php';
    require_once 'resources/fpdf/fpdf.php';

    # Check if action is set, else = default
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'default'; # Action not set, so I set it to "default"
    }

    # Switch $action variable. If the action doesn't exist = default case
    switch($action) {
        case 'user_delete':
            UserController::getInstance('')->userCheckDelete($_GET['emb']);
            break;

        case 'users_create':
            UserController::getInstance('')->setRenderTo('users_create');
            break;
        
        case 'users_global':
            if(empty($_GET['searchInfos'])) {
                UserController::getInstance('')->setRenderTo('users_global');
            } else {
                UserController::getInstance($_GET['searchInfos'])->setRenderTo('users_global');
            }

            if(empty($_GET['emb'])) {
                UserController::getInstance('')->setRenderTo('users_global');
            } else {
                UserController::getInstance($_GET['emb'])->setRenderTo('users_global');
            }
            break;

        # TBT Section
        case 'tbt_confirmedRestitute':
            TbtController::getInstance()->restituteKey($_GET['loan_id']);
            break;

        case 'tbt_loan':
            TbtController::getInstance()->setRenderTo('tbt_loan');
            break;

        case 'tbt_global':
            TbtController::getInstance()->setRenderTo('tbt_global');
            break;

        # DECT Section
        case 'dect_clearOrders':
            DectController::getInstance('')->clearOrders();
            break;

        case 'dect_ordersList':
            DectController::getInstance('')->setRenderTo('dect_ordersList');
            break;

        case 'dect_delete':
            DectController::getInstance('')->dectCheckDelete($_GET['numserie']);
            break;

        case 'dect_create':
            DectController::getInstance('')->setRenderTo('dect_create');
            break;

        case 'dect_global':
            if(empty($_GET['searchInfos'])) {
                DectController::getInstance('')->setRenderTo('dect_global');
            } else {
                DectController::getInstance($_GET['searchInfos'])->setRenderTo('dect_global');
            }

            if(empty($_GET['emb'])) {
                DectController::getInstance('')->setRenderTo('dect_global');
            } else {
                DectController::getInstance($_GET['emb'])->setRenderTo('dect_global');
            }
        
            break;
        
        # Default page if the action is not valid
        default:
            IndexController::getInstance()->setRenderTo('index');
            break;
    } 
?>