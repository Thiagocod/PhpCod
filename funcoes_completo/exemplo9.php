<?php // função Recursiva

$hierarquia = array(
  array(
    'nome_cargo'=>'CEO',
    'subordinados'=> array(
      //inicio: diretor Comercial
      array(
        'nome_cargo'=>'Diretor Comercial',
        'subordinados' => array(
          //inicio: gerente de vendas
          array(
            'nome_cargo'=>'Gerente de vendas'
          )
          //termino: gerente de vendas
        )
      ),
    // termino: diretor comercial
    // inicio: diretor financeiro
    array(
      'nome_cargo'=>'Direitor Financeiro',
      'subordinados'=>array(
        //inicio: gerente de contas a pagar
        array(
          'nome_cargo'=>'Gerente de contas a pagar',
          'subordinados'=> array(
            //inicio: supervisor de pagamentos
            array(
              'nome_cargo'=>'supervisor de pagamentos'
            )
            //termino: supervisos de pagamentos
          )

        ),
        // termino: gerente de contas a pagar
        // inicio: gerente de compras
        array(
          'nome_cargo'=>'Gerente de compras',
          'subordinados'=>array(
            //inicio: Supervisor de suprimentos
            array(
              'nome_cargo'=>'Supervisor de suprimentos'
            )
            //termino: Supervisor de Suprimentos
          )
        )
        //termino: gerente de compras
      )
    )
    // termino: direitor financeiro
  )
  )

);

function exibe($cargos){
  $html = "<ul>";
  foreach ($cargos as $cargo) {
    $html .= "<li>";
    $html .= $cargo['nome_cargo'];
    if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

      $html .= exibe($cargo['subordinados']);

    }


    $html .= "</li>";
  }

  $html .="</ul>";
  return $html;
}

echo exibe($hierarquia);

?>
