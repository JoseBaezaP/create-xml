<?php

class Comprobante extends XML
{
    //En esta parte inicializo los atributos de manera más ordenada
    public $atributos = [
        "Version" => '3.3',
        "Serie" => '',
        "Folio" => '',
        "Sello" => ' ',
        "NoCertificado" => '',
        "Certificado" => ' ',
        "CondicionesDePago" => '',
        "Descuento" => '',
        "MotivoDescuento" => '',
        "TipoCambio" => '',
        "Moneda" => '',
        "SubTotal" => '',
        "Total" => '',
        "MetodoPago" => 'PUE',
        "FormaPago" => '',
        "TipoDeComprobante" => '',
        "LugarExpedicion" => '',
        "NumCtaPago" => '',
        "FolioFiscalOrig" => '',
        "SerieFolioFiscalOrig" => '',
        "FechaFolioFiscalOrig" => '',
        "MontoFolioFiscalOrig" => '',
        "Fecha" => ''
    ];

    public $rules = [
        "Version" => 'R',
        "Serie" => 'O',
        "Folio" => 'O',
        "Sello" => 'R',
        "MetodoPago" => 'R',
        "FormaPago" => 'R',
        "NoCertificado" => 'R',
        "Certificado" => 'R',
        "CondicionesDePago" => 'O',
        "Descuento" => 'O',
        "MotivoDescuento" => 'O',
        "TipoCambio" => 'O',
        "Moneda" => 'R',
        "Total" => 'R',
        "TipoDeComprobante" => 'R',
        "LugarExpedicion" => 'R',
        "NumCtaPago" => 'O',
        "FolioFiscalOrig" => 'O',
        "SerieFolioFiscalOrig" => 'O',
        "FechaFolioFiscalOrig" => 'O',
        "MontoFolioFiscalOrig" => 'O',
        "SubTotal" => 'R',
        "Fecha" => 'R'
    ];

    //En esta parte le paso los atributos que estan en el array del archivo index para setearlos en las key del array de atributos
    function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->atributos[$key] = $value;
        }
    }

}