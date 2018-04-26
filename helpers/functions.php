<?php

/*
 * this functions file contains common functions
 * which used offen 
 */

function app() {
    return Yii::$app;
}

function user() {
    return app()->user;
}

function request() {
    return app()->request;
}
