<?php
function consultar_saldo($saldo)
{
    echo"su saldo actal es: ".$saldo."\n";
}

function consignar_dinero($saldo, $monto) {
    if ($monto >0) {
            $saldo += $monto;
            echo "Ha consignado".$monto .". su nuevo saldo es".$saldo."\n";
        }else{
            echo "El monto es invalido para consignar.\n";
        }
    }
    function retirar_dinero($saldo,$monto){
    if ($monto>0 && $monto<=$saldo){
        $saldo -= $monto;
        echo "Ha retirado".$monto .". su nuevo saldo es".$saldo."\n";
    }else{
        echo "El monto es invalido para retirar.\n";
    }
}
$saldo =8000;

echo "\n Seleccione una opción:\n";
echo "1.Consultar saldo\n";
echo "2.Consignar dinero\n";
echo "3.Retirar dinero\n";
echo "4.Salir\n";

$opcion=intval(readline());

switch ($opcion){
    case 1:
        consutar_saldo($saldo);
        break;
    case 2:
        $monto =floatval(readline("ingrese el monto a consignar:"));
        consignar_dinero($saldo,$monto);
        break;
    case 3:
        $monto =floatval(readline("ingrese el monto a retirar:"));
        retirar_dinero($saldo,$monto);
        break;
    case 4:
        echo "Gracias por usar nuestro sistema.";
        break;
    default:
    echo "opcion no valida.Por favor, intente de nuevo.\n";
    break;
}
?>