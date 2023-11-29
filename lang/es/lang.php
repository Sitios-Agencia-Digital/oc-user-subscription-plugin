<?php

return [
    'plugin' => [
        'name' => 'Suscriptores',
        'description' => 'Crear y gestionar listas de suscripción por correo electrónico con facilidad.',
    ],
    'permissions' => [
        'manage_settings' => 'Gestionar configuración de conexión de usuario',
    ],
    'settings' => [
        'menu_label' => 'Configuración',
        'label' => 'Conexión de Usuario',
        'description' => 'Gestiona la configuración para la Conexión de Usuario',
        'fields' => [
            'verify_emails' => [
                'label' => 'Verificar mediante correo electrónico',
                'comment' => 'Validar la corrección del correo electrónico',
            ],
            'key_expires_in' => [
                'label' => 'Expira la clave en (días)',
            ],
            'verification_success_page' => [
                'label' => 'Página de éxito de verificación',
                'comment' => 'La página a la que redirigir al usuario cuando la verificación sea exitosa',
            ],
        ],
    ],
    'general' => [
        'fields' => [],
    ],
    'subscribers' => [
        'list_title' => 'Suscriptores',
        'menu_label' => 'Suscriptores',
        'verified' => 'Suscriptores verificados',
        'unverified' => 'Suscriptores no verificados',
        'export' => 'Exportar suscriptores',
        'filter' => [
            'verified' => 'Verificados',
            'subscribed_between' => 'Suscrito entre',
            'verified_between' => 'Verificado entre',
        ],
    ],
    'subscriber' => [
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'email' => [
                'label' => 'Correo electrónico',
            ],
            'created_at' => [
                'label' => 'Creado en',
            ],
            'updated_at' => [
                'label' => 'Actualizado en',
            ],
        ],
    ],
    'components' => [
        'subscriptionform' => [
            'name' => 'Formulario de suscripción',
            'description' => 'Muestra un formulario mediante el cual los usuarios pueden suscribirse a listas de correo',
            'properties' => [
                'subscribeButtonText' => [
                    'title' => 'Texto del botón de suscripción',
                    'description' => 'El texto que se mostrará en el botón de suscripción.',
                    'default' => 'Suscribirse',
                ],
                'successMessage' => [
                    'title' => 'Mensaje de éxito',
                    'description' => 'Texto que se mostrará cuando la suscripción sea exitosa.',
                    'default' => 'Gracias por suscribirte.',
                ],
                'category' => [
                    'title' => 'Categoría',
                    'description' => 'Categoría a la que se asociará el suscriptor.',
                ],
            ],
        ],
    ],
    'mail' => [
        'verify_subscriber' => [
            'subject' => 'Por favor, confirma tu suscripción.',
        ],
        'user_verified_successfully' => 'Gracias, tu correo electrónico ha sido verificado.',
    ],
    'category' => [
        'new' => 'Nueva categoría',
        'label' => 'Categoría',
        'create_title' => 'Crear categoría',
        'update_title' => 'Editar categoría',
        'preview_title' => 'Vista previa de categoría',
        'list_title' => 'Gestionar categorías',
        'no_category_selected' => 'Ninguna categoría seleccionada',
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Nombre',
            ],
            'description' => [
                'label' => 'Descripción',
            ],
        ],
    ],
    'categories' => [
        'delete_selected_confirm' => '¿Eliminar las categorías seleccionadas?',
        'menu_label' => 'Categorías',
        'return_to_list' => 'Volver a categorías',
        'delete_confirm' => '¿Realmente quieres eliminar esta categoría?',
        'delete_selected_success' => 'Categorías seleccionadas eliminadas correctamente.',
        'delete_selected_empty' => 'No hay categorías seleccionadas para eliminar.',
    ],
    'subscription' => [
        'not_verified_yet' => 'No verificado aún',
        'new' => 'Nueva suscripción',
        'label' => 'Suscripción',
        'create_title' => 'Crear suscripción',
        'update_title' => 'Editar suscripción',
        'preview_title' => 'Vista previa de suscripción',
        'list_title' => 'Gestionar suscripciones',
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'email' => [
                'label' => 'Correo electrónico',
            ],
            'category' => [
                'label' => 'Categoría',
            ],
            'is_verified' => [
                'label' => 'Está verificado',
            ],
            'verified_at' => [
                'label' => 'Verificado en',
            ],
            'created_at' => [
                'label' => 'Creado en',
            ],
            'updated_at' => [
                'label' => 'Actualizado en',
            ],
        ],
    ],
    'subscriptions' => [
        'delete_selected_confirm' => '¿Eliminar las suscripciones seleccionadas?',
        'verified' => 'Suscripciones verificadas',
        'unverified' => 'Suscripciones no verificadas',
        'export' => 'Exportar suscripciones',
        'menu_label' => 'Suscripciones',
        'return_to_list' => 'Volver a suscripciones',
        'delete_confirm' => '¿Realmente quieres eliminar esta suscripción?',
        'delete_selected_success' => 'Suscripciones seleccionadas eliminadas correctamente.',
        'delete_selected_empty' => 'No hay suscripciones seleccionadas para eliminar.',
    ],
];
