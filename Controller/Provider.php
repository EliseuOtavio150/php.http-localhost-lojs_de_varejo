<?php

namespace APP\Controller;

use APP\Model\Address;
use APP\Model\Validation;
use APP\Model\Product;
use APP\Model\Provider;


require_once '../../vendor/autoload.php';
use APP\Utils\Redirect;

if(empty($_post)){
    Redirect::redirect(type: 'error', message: 'Requisição inválida!!!');
}

$name = $_POST["name"];
$cnpj = $_POST["cnpj"];
$publicPlace = $_POST["publicPlace"];
$streetNumber = $_POST["streetNumber"];
$neighborhood = $_POST["neighborhood"];
$city = $_POST["city"];
$postalCode = $_POST["postalCode"];

$error = array();

if(!Validation::validateName($name))
{
    array_push($error, "O nome do fornecedor !!!");
}

if(!Validation::validateCnpj($cnpj))
{
    array_push($error,"Digite seu CNPJ!!!");
}

if(!Validation::validateName($publicPlace))
{
    array_push($error,"Digite seu Lugar público!!!");
}

if(!Validation::validateNumber($streetNumber))
{
    array_push($error, "Digite o numero da rua!!!");
}

if(!Validation::validateName($neighborhood))
{
    array_push($error,"Digite seu bairro!!!");
}

if(!Validation::validateName($city))
{
    array_push($error,"Digite a sua cidade!!!!");
}

if(!Validation::validateName($postalCode))
{
    array_push($error,"Digite seu CNPJ!!!");
}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{

    $address = new Address(
        publicPlace : $publicPlace,
        streetNumber : $streetNumber,
        neighborhood : $neighborhood,
        city : $city,
        postalCode :$postalCode
    );
    $provider = new Provider(
        name: $name,
        cnpj: $cnpj,
        address: $address,
    );


    Redirect::redirect(
        message:'fornecedor cadastrado com sucesso!!!'
    );

}
?>

