<?php
   if (isset($_POST['enviar'])) {
      if (!empty($_POST['nombres']) && !empty($_POST['salario'])) {
         $nombres = $_POST['nombres'];
         $salario_base = (int) $_POST['salario_base'];
         $dias_laborados = (int) $_POST['dias_laborados'];
         $comisiones = (int) $_POST['comisiones'];
         $n_ventas = (int) $_POST['n_ventas'];
         $tarifa_comision = (int) $_POST['tarifa_comision'];
         $deducciones = (int) $_POST['deducciones'];
         $h_trabajadas = (int) $_POST['h_trabajadas'];
         
         $ganancia = ($salario_base / 30);
         $tl_salario = ($ganancia * $dias_laborados);
         
         $netoAsalariado = ($tl_salario + $comisiones - $deducciones);
         $netoComision = ($salario_base + $comisiones);
         $h_ordinaria= ($salario_base /240);

         if ($h_trabajadas >= 8 $h_trabajadas <= 48) {
            $HED = ($h_ordinaria* 0.25);
            $HEN = ($h_ordinaria *0.75);
            $HFD = ($h_ordinaria * 0.75);
            $HFN = ($h_ordinaria);
            $HDOM = ($HFD + $HFN);
         }

         $total_extras = ($HED + $HEN + $HDOM);
         $netoHoras = ($saliro_base + ($h_ordinaria * 1500));

         $arregloNomina = [
            [
                    'Nombre y Apellido',
                    'Salario base',
                    'Días Laborados',
                    'Comisiones',
                    'Numero de ventas',
                    'Tarifa comision',
                    'Deducciones',
                    '',
                    '',
            ],
            [
                    $nombres,
                    $salario_base,
                    $dias_laborados,
                    $comisiones,
                    $n_ventas,
                    $tarifa_comision,
                    $deducciones,
                    $h_trabajadas,
            ]
         ];

         $s = '<table border="1">';
         foreach ( $arregloNomina as $r ) {
            $s .= '<tr>';
            foreach ( $r as $v ) {
               $s .= '<td>'.$v.'</td>';
            }
            $s .= '</tr>';
         }
         $s .= '</table>';
         echo $s;
      }
   }
?>