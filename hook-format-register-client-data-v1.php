<?php

use WHMCS\Database\Capsule;

// Función para capitalizar cada palabra de una cadena
function capitalizeEachWord($string) {
    return ucwords(strtolower($string));
}

// Hook para capitalizar y formatear campos al agregar un cliente
add_hook('ClientAdd', 1, function($vars) {
    // Obtener el ID del cliente
    $clientId = $vars['userid'];
    
    // Consultar los datos actuales del cliente
    $client = Capsule::table('tblclients')->where('id', $clientId)->first();

    // Formatear los datos
    $firstName = capitalizeEachWord($client->firstname); // Nombres compuestos
    $lastName = capitalizeEachWord($client->lastname);   // Apellidos compuestos
    $companyName = strtoupper($client->companyname);     // Empresa en mayúsculas
    $city = capitalizeEachWord($client->city);           // Ciudad
    $address1 = capitalizeEachWord($client->address1);   // Dirección 1
    $address2 = capitalizeEachWord($client->address2);   // Dirección 2
    $state = capitalizeEachWord($client->state);         // Provincia/Estado/Región
    $email = strtolower($client->email);                 // Email en minúsculas

    // Actualizar la base de datos con los datos formateados
    Capsule::table('tblclients')
        ->where('id', $clientId)
        ->update([
            'firstname' => $firstName,
            'lastname' => $lastName,
            'companyname' => $companyName,
            'city' => $city,
            'address1' => $address1,
            'address2' => $address2,
            'state' => $state,
            'email' => $email
        ]);
});

// Hook para capitalizar y formatear campos al editar el perfil del cliente
add_hook('ClientEdit', 1, function($vars) {
    // Obtener el ID del cliente
    $clientId = $vars['userid'];
    
    // Consultar los datos actuales del cliente
    $client = Capsule::table('tblclients')->where('id', $clientId)->first();

    // Formatear los datos
    $firstName = capitalizeEachWord($client->firstname);
    $lastName = capitalizeEachWord($client->lastname);
    $companyName = strtoupper($client->companyname);
    $city = capitalizeEachWord($client->city);
    $address1 = capitalizeEachWord($client->address1);
    $address2 = capitalizeEachWord($client->address2);
    $state = capitalizeEachWord($client->state);
    $email = strtolower($client->email);

    // Actualizar la base de datos con los datos formateados
    Capsule::table('tblclients')
        ->where('id', $clientId)
        ->update([
            'firstname' => $firstName,
            'lastname' => $lastName,
            'companyname' => $companyName,
            'city' => $city,
            'address1' => $address1,
            'address2' => $address2,
            'state' => $state,
            'email' => $email
        ]);
});
