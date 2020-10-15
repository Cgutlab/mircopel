<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha después de: fecha.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a la fecha.',
    'alpha' => 'El :attribute solo puede contener letras.',
    'alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo puede contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterior a: fecha.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a la fecha.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre: mínimo y: máximo de kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max caracteres.',
        'array' => 'El :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación del :attribute no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a: fecha.',
    'date_format' => 'El :attribute no coincide con el formato: formato.',
    'different' => 'El :attribute y: otro deben ser diferentes.',
    'digits' => 'El :attribute debe ser: dígitos dígitos.',
    'digits_between' => 'El :attribute debe estar entre: mínimo y: máximo de dígitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'exists' => 'El atributo seleccionado: no es válido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que: valor.',
        'file' => 'El :attribute debe ser mayor que: valor de kilobytes.',
        'string' => 'El :attribute debe ser mayor que: caracteres de valor.',
        'array' => 'El :attribute debe tener más de: elementos de valor.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual que el valor.',
        'file' => 'El :attribute debe ser mayor o igual que el valor de kilobytes.',
        'string' => 'El :attribute debe ser mayor o igual que los caracteres de valor.',
        'array' => 'El :attribute debe tener: elementos de valor o más.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El atributo seleccionado: no es válido.',
    'in_array' => 'El campo :attribute no existe en: otro.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que: valor.',
        'file' => 'El :attribute debe ser menor que: valor de kilobytes.',
        'string' => 'El :attribute debe ser menor que: caracteres de valor.',
        'array' => 'El :attribute debe tener menos de: elementos de valor.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor o igual que el valor.',
        'file' => 'El :attribute debe ser menor o igual que el valor de kilobytes.',
        'string' => 'El :attribute debe ser menor o igual que el valor de los caracteres.',
        'array' => 'El :attribute no debe tener más de: elementos de valor.',
    ],
    'max' => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file' => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string' => 'El :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El :attribute no puede tener más de: elementos máximos.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: valores.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: valores.',
    'min' => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file' => 'El :attribute debe ser al menos: kilobytes mínimos.',
        'string' => 'El :attribute debe tener al menos :min caracteres.',
        'array' => 'El :attribute debe tener al menos: elementos min.',
    ],
    'not_in' => 'El atributo seleccionado: no es válido.',
    'not_regex' => 'El formato de :attribute no es válido.',
    'numeric' => 'El :attribute debe ser un número.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :attribute no es válido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando: otro es: valor.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que: otro esté en: valores.',
    'required_with' => 'El campo :attribute es obligatorio cuando: los valores están presentes.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando: los valores están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando: los valores no están presentes.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los valores está presente.',
    'same' => 'El :attribute y el otro debe coincidir.',
    'size' => [
        'numeric' => 'El :attribute debe ser: tamaño.',
        'file' => 'El :attribute debe ser: kilobytes de tamaño.',
        'string' => 'El :attribute debe ser: caracteres de tamaño.',
        'array' => 'El :attribute debe contener: elementos de tamaño.',
    ],
    'starts_with' => 'El :attribute debe comenzar con uno de los siguientes:: valores',
    'string' => 'El :attribute debe ser una cadena.',
    'timezone' => 'El :attribute debe ser una zona válida.',
    'unique' => 'El :attribute ya ha sido tomado.',
    'uploaded' => 'El :attribute no se pudo cargar.',
    'url' => 'El formato de :attribute no es válido.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensaje personalizado',
        ],
    ],

    'attributes' => [],

];


/* ENGLISH
<?php

return [

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'attributes' => [],

];

*/
