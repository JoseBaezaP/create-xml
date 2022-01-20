<?php

class Emisor extends XML
{
    //En esta parte inicializo los atributos de manera más ordenada

    public $atributos = [
        "Rfc" => '',
        "Nombre" => '',
        "RegimenFiscal" => ''
    ];

    public  $rules = [
        "Rfc" => 'R',
        "Nombre" => 'R',
        "RegimenFiscal" => 'R'
    ];

    //En esta parte le paso los atributos que estan en el array del archivo index para setearlos en las key del array de atributos
    function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->atributos[$key] = $value;
        }
    }

    public function getNode()
    {
        $xml = '<cfdi:Emisor ' . $this->getAtributes() . ' />';
        return $xml;
    }
}