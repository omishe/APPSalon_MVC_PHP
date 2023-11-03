<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function isAuth(){

    if( !isset( $_SESSION[ 'login' ] ) ){
        header( 'Location: /' );
    }

}

function esUltimo( string $actual, string $proximo ) : bool {
    
    if( $actual !== $proximo ){
        return true;
    }
    return false;

}

function isAdmin() : void {

    if(  $_SESSION[ 'admin' ] !== '1'  && !( $_SERVER[ 'PATH_INFO' ] === '/cita' )){

        header( 'Location: /' );

    } else if( $_SESSION[ 'admin' ] === '1' && !( $_SERVER[ 'PATH_INFO' ] === '/admin' ) ) {
        header( 'Location: /admin' );
    }

}