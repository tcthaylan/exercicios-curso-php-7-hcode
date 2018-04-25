<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Término: Gerente de Vendas
                )
            ),
            //Término: Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Finaceiro',
                'subordinados' => array(
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )
                            //Término: Surpevisor de Suprimentos
                        )
                    ),
                    //Término: Gerente de Compras
                    //Inicio: Gerente Financeiro
                    array(
                        'nome_cargo' => 'Gerente Financeiro',
                        'subordinados' => array(
                            //Inicio: Supervisor de Contas a Pagar
                            array(
                                'nome_cargo' => 'Supervisor de Contas a Pagar'
                            )
                            //Término: Supervisor de Contas a Pagar
                        )
                    )
                    //Término: Gerente Financeiro
                )
            )
            //Término: Diretor Financeiro
        )
    )
);

function exibe($cargos) {

    $html = "<ul>";

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);
?>