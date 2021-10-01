<?php

namespace wms\app\core;

class Flasher
{

    public static function setFlash($message, $action, $type)
    {
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
                <div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Pegawai ' . $_SESSION['flash']['message'] . ' ' . $_SESSION['flash']['action'] . '
                </div> 
                ';
            unset($_SESSION['flash']);
        }
    }
}
