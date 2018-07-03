<?php

class devConfig
{
    public $cfg;
    public function __construct()
    {
        $this->cfg = [
            'cfgName'=>'Servidor Desarrollo [10.0.20.31]',
            'default' => 'simaflor',
            'connections' => [
                # simaflor (default)
                'simaflor' => [
                    'driver' => 'dblib',
                    'host' => '10.0.20.31',
                    'database' => 'simaflor-pro',
                    'username' => 'sa',
                    'password' => 'S1st3m4S',
                    'commands' => [
                        'set dateformat ymd',
                        'set datefirst 1'
                    ]
                ],
                 # Kactus (Sistema de Nomina)
                 'kactus' => [
                    'driver' => 'dblib',
                    'host' => '10.0.20.31',
                    'database' => 'kactus50',
                    'username' => 'sa',
                    'password' => 'S1st3m4S',
                    'commands' => [
                        'set dateformat ymd',
                        'set datefirst 1'
                    ]
                ],
                # gpvf (DB intermedia)
                'gpvf' => [
                    'driver' => 'dblib',
                    'host' => '10.5.2.130\MF_PROD',
                    'database' => 'gpvf',
                    'username' => 'simaflor_apps',
                    'password' => 'Sistemas123456@$',
                    'commands' => [
                        'set dateformat ymd',
                        'set datefirst 1'
                    ]
                ],
                # VIDA 18 (Sistema de Ventas)
                'vida18' => [
                    'driver' => 'dblib',
                    //'host' => 'VIDA18DBSRV',
                    //'host' => '10.5.2.130:2435',
                    'host' => '54.209.21.228:2435',
                    'database' => 'GPVFMultiflora',
                    'username' => 'cemultiflora',
                    'password' => 'PWDcext1',
                    'commands' => [
                        'set dateformat ymd',
                        'set datefirst 1',
                        'SET ANSI_NULLS ON',
                        'SET ANSI_WARNINGS ON'
                    ]
                ]
            ]
        ];
    }
}
