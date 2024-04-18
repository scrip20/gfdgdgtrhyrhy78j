<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Líneas de idioma de validación
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen múltiples versiones,
    | como las reglas de tamaño. Siéntete libre de ajustar cada uno de estos mensajes aquí.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado',
    'accepted_if' => 'El campo :attribute se acepta cuando :other es igual a :value.',
    'active_url' => 'El campo :attribute no es una URL activa',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo debe contener letras',
    'alpha_dash' => 'El campo :attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute solo debe contener letras y números',
    'array' => 'El campo :attribute debe ser un array',
    'ascii' => 'El campo :attribute solo debe contener caracteres ASCII.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date',
    'between' => [
        'array' => 'El campo :attribute debe tener entre :min y :max elementos',
        'file' => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'string' => 'El campo :attribute debe tener entre :min y :max caracteres',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso',
    'can' => 'El campo :attribute contiene un valor no autorizado',
    'confirmed' => 'La confirmación de :attribute no coincide',
    'current_password' => 'La contraseña es incorrecta',
    'date' => 'El campo :attribute no es una fecha válida',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute no corresponde al formato :format.',
    'decimal' => 'El campo :attribute debe ser un decimal con :decimal lugares decimales.',
    'declined' => 'El campo :attribute debe ser rechazado',
    'declined_if' => 'El campo :attribute debe ser rechazado cuando :other es igual a :value.',
    'different' => 'El campo :attribute y :other deben ser diferentes',
    'digits' => 'El campo :attribute debe tener :digits dígitos',
    'digits_between' => 'El campo :attribute debe tener entre :min y :max dígitos',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen inválidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con uno de los siguientes: :values.',
    'doesnt_start_with' => 'El campo :attribute no debe comenzar con uno de los siguientes: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El campo :attribute es inválido',
    'exists' => 'El campo :attribute seleccionado es inválido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute es obligatorio',
    'gt' => [
        'array' => 'El campo :attribute debe tener más de :value elementos.',
        'file' => 'El archivo :attribute debe ser mayor que :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'string' => 'El campo :attribute debe tener más de :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe tener :value elementos o más.',
        'file' => 'El archivo :attribute debe ser igual o mayor que :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser igual o mayor que :value.',
        'string' => 'El campo :attribute debe tener :value caracteres o más.',
    ],
    'image' => 'El campo :attribute debe ser una imagen',
    'in' => 'El campo :attribute seleccionado es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un entero',
    'ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El campo :attribute debe estar en minúsculas',
    'lt' => [
        'array' => 'El campo :attribute debe tener menos de :value elementos.',
        'file' => 'El archivo :attribute debe ser menor que :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor que :value.',
        'string' => 'El campo :attribute debe tener menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo :attribute no debe tener más de :value elementos.',
        'file' => 'El archivo :attribute debe ser igual o menor que :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser igual o menor que :value.',
        'string' => 'El campo :attribute debe tener :value caracteres o menos.',
    ],
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El campo :attribute no debe tener más de :max elementos.',
        'file' => 'El archivo :attribute no debe ser mayor que :max kilobytes.',
        'numeric' => 'El campo :attribute no debe ser mayor que :max.',
        'string' => 'El campo :attribute no debe tener más de :max caracteres.',
    ],
    'max_digits' => 'El campo :attribute no debe tener más de :max dígitos.',
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe tener al menos :min elementos.',
        'file' => 'El archivo :attribute debe ser al menos de :min kilobytes.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',
    ],
    'min_digits' => 'El campo :attribute debe tener al menos :min dígitos.',
    'missing' => 'El campo :attribute debe estar ausente.',
    'missing_if' => 'El campo :attribute debe estar ausente cuando :other es :value.',
    'missing_unless' => 'El campo :attribute debe estar ausente a menos que :other sea :value.',
    'missing_with' => 'El campo :attribute debe estar ausente cuando :values está presente.',
    'missing_with_all' => 'El campo :attribute debe estar ausente cuando todos los :values están presentes.',
    'multiple_of' => 'El campo :attribute debe ser múltiplo de :value.',
    'not_in' => 'El campo :attribute seleccionado es inválido.',
    'not_regex' => 'El formato del campo :attribute es inválido.',
    'numeric' => 'El campo :attribute debe ser un número',
    'password' => [
        'letters' => 'El campo :attribute debe incluir al menos una letra.',
        'mixed' => 'El campo :attribute debe incluir al menos una letra mayúscula y una minúscula.',
        'numbers' => 'El campo :attribute debe incluir al menos un número.',
        'symbols' => 'El campo :attribute debe incluir al menos un símbolo.',
        'uncompromised' => 'El valor del campo :attribute parece comprometido. Por favor, elige otro valor.',
    ],
    'present' => 'El campo :attribute debe estar presente',
    'prohibited' => 'El campo :attribute está prohibido',
    'prohibited_if' => 'El campo :attribute está prohibido cuando',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es igual a :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other sea :value.',
    'prohibits' => 'El campo :attribute prohíbe que :other esté presente',
    'regex' => 'El formato del campo :attribute es inválido',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para :values.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'El campo :attribute es obligatorio cuando :other es aceptado.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other sea :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando todos los :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los :values está presente.',
    'same' => 'El campo :attribute y :other deben coincidir',
    'size' => [
        'array' => 'El campo :attribute debe contener :size elementos.',
        'file' => 'El archivo :attribute debe pesar :size kilobytes.',
        'numeric' => 'El campo :attribute debe ser :size.',
        'string' => 'El campo :attribute debe contener :size caracteres.',
    ],
    'starts_with' => 'El campo :attribute debe comenzar con uno de los siguientes: :values',
    'string' => 'El campo :attribute debe ser una cadena de texto',
    'timezone' => 'El campo :attribute debe ser una zona horaria válida',
    'unique' => 'El campo :attribute ya ha sido registrado.',
    'uploaded' => 'El campo :attribute falló al subir.',
    'uppercase' => 'El campo :attribute debe estar en mayúsculas.',
    'url' => 'El formato de la URL :attribute es inválido',
    'ulid' => 'El campo :attribute debe ser un ULID válido.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Líneas de idioma de validación personalizadas
    |--------------------------------------------------------------------------
    |
    | Aquí puedes especificar mensajes de validación personalizados para atributos usando la
    | convención "attribute.rule" para nombrar las líneas. Esto facilita
    | especificar una línea de idioma personalizada específica para una regla de atributo dada.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensaje-personalizado',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atributos de validación personalizados
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar el marcador de posición de atributo
    | por algo más amigable para el lector, como "Dirección de correo electrónico" en lugar
    | de "email". Esto simplemente nos ayuda a hacer nuestro mensaje más expresivo.
    |
    */

    'attributes' => [
        'name' => 'nombre',
        'username' => 'nombre de usuario',
        'email' => 'correo electrónico',
        'first_name' => 'nombre',
        'last_name' => 'apellido',
        'password' => 'contraseña',
        'password_confirmation' => 'confirmación de contraseña',
        'city' => 'ciudad',
        'country' => 'país',
        'address' => 'dirección',
        'phone' => 'teléfono',
        'mobile' => 'móvil',
        'age' => 'edad',
        'sex' => 'sexo',
        'gender' => 'género',
        'day' => 'día',
        'month' => 'mes',
        'year' => 'año',
        'hour' => 'hora',
        'minute' => 'minuto',
        'second' => 'segundo',
        'content' => 'contenido',
        'description' => 'descripción',
        'excerpt' => 'extracto',
        'date' => 'fecha',
        'time' => 'hora',
        'available' => 'disponible',
        'size' => 'tamaño',
        'price' => 'precio',
        'desc' => 'descripción',
        'title' => 'título',
        'q' => 'búsqueda',
        'link' => 'enlace',
        'slug' => 'slug',
        // página de historia
        'cover_photo' => 'foto de portada',
        'level' => 'nivel',
        'story_name' => 'título de la historia',
        'author' => 'nombre del autor',
        'story_order' => 'orden de la historia',
        // admin
        'image' => 'imagen',
        'old_password' => 'contraseña antigua',
        'new_password' => 'nueva contraseña',
        'new_password_confirmation' => 'confirmación de la nueva contraseña',
        // slide
        'text' => 'texto',
        'audio' => 'audio',
    ],

];




