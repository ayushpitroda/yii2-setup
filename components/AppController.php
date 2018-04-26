<?php

namespace app\components;

use yii;
use yii\base\Controller;
use webvimark\modules\UserManagement\components\GhostAccessControl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AppController extends Controller {

    public function behaviors() {
        return [
            'ghost-access' => [
                'class' => GhostAccessControl::className(),
            ],
        ];
    }

}
