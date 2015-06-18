<?php
return [

    'service_manager' => [
        'abstract_factories' => [
            'Matryoshka\Model\Wrapper\Mongo\Service\MongoDbAbstractServiceFactory',
            'Matryoshka\Model\Wrapper\Mongo\Service\MongoCollectionAbstractServiceFactory',
        ],
        'invokables'         => [
            'Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria' => 'Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria',
            'Matryoshka\Model\Wrapper\Mongo\ResultSet\HydratingResultSet' => 'Matryoshka\Model\Wrapper\Mongo\ResultSet\HydratingResultSet'
        ]
    ],
    // Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria
    'mongodb' => [
        'DataBase\MongoDb' => [
            'hosts' => '127.0.0.1:27017',
            'database' => 'matryoshkaTest'

        ],
    ],
    'matryoshka-objects' => [ // Object abstract service factory
        'User' => [
            'type'                   => 'MatryoshkaTest\User\UserEntity',
            'active_record_criteria' => 'Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria',
            // 'hydrator'               => 'Solo\Api\V1\Rest\User\Hydrator\UserHydrator', OPTIONAL
        ],
    ],
    'mongocollection'    => [
        'Mongo\DataGateway\User' => [
            'database'   => 'DataBase\MongoDb',
            'collection' => 'user'
        ],
    ],
    'matryoshka-models' => [ // Model abstract service factory
        'MatryoshkaTest\User\UserService' => [
            'datagateway'           => 'Mongo\DataGateway\User',
            'resultset'             => 'Matryoshka\Model\Wrapper\Mongo\ResultSet\HydratingResultSet',
            'object'                => 'User',
            'hydrator'              => 'MatryoshkaTest\User\UserHydrator',
        ],
    ]

];