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

    'accepted' => ':attribute мора бити прихваћен.',
    'accepted_if' => ':attribute мора бити прихваћен када је :other :value.',
    'active_url' => ':attribute није валидан URL.',
    'after' => ':attribute мора бити датум после :date.',
    'after_or_equal' => ':attribute мора бити датум после или једнак :date.',
    'alpha' => ':attribute може садржавати само слова.',
    'alpha_dash' => ':attribute може садржавати само слова, бројеве, цртице и доње црте.',
    'alpha_num' => ':attribute може садржавати само слова и бројеве.',
    'array' => ':attribute мора бити низ.',
    'before' => ':attribute мора бити датум пре :date.',
    'before_or_equal' => ':attribute мора бити датум пре или једнак :date.',
    'between' => [
        'array' => ':attribute мора имати између :min и :max ставки.',
        'file' => ':attribute мора бити између :min и :max килобајта.',
        'numeric' => ':attribute мора бити између :min и :max.',
        'string' => ':attribute мора бити између :min и :max карактера.',
    ],
    'boolean' => 'Поље :attribute мора бити тачно или нетачно.',
    'confirmed' => 'Потврда :attribute се не поклапа.',
    'current_password' => 'Лозинка није тачна.',
    'date' => ':attribute није валидан датум.',
    'date_equals' => ':attribute мора бити датум једнак :date.',
    'date_format' => ':attribute се не поклапа са форматом :format.',
    'declined' => ':attribute мора бити одбијен.',
    'declined_if' => ':attribute мора бити одбијен када је :other :value.',
    'different' => ':attribute и :other морају бити различити.',
    'digits' => ':attribute мора имати :digits цифара.',
    'digits_between' => ':attribute мора имати између :min и :max цифара.',
    'dimensions' => ':attribute има неисправне димензије слике.',
    'distinct' => 'Поље :attribute има дуплу вредност.',
    'doesnt_end_with' => ':attribute не сме завршавати са: :values.',
    'doesnt_start_with' => ':attribute не сме почињати са: :values.',
    'email' => ':attribute мора бити валидна адреса е-поште.',
    'ends_with' => ':attribute мора завршавати са: :values.',
    'enum' => 'Изабрани :attribute није валидан.',
    'exists' => 'Изабрани :attribute није валидан.',
    'file' => ':attribute мора бити фајл.',
    'filled' => 'Поље :attribute мора имати вредност.',
    'gt' => [
        'array' => ':attribute мора имати више од :value ставки.',
        'file' => ':attribute мора бити већи од :value килобајта.',
        'numeric' => ':attribute мора бити већи од :value.',
        'string' => ':attribute мора бити дужи од :value карактера.',
    ],
    'gte' => [
        'array' => ':attribute мора имати :value ставки или више.',
        'file' => ':attribute мора бити већи или једнак :value килобајта.',
        'numeric' => ':attribute мора бити већи или једнак :value.',
        'string' => ':attribute мора бити дужи или једнак :value карактера.',
    ],
    'image' => ':attribute мора бити слика.',
    'in' => 'Изабрани :attribute није валидан.',
    'in_array' => 'Поље :attribute не постоји у :other.',
    'integer' => ':attribute мора бити цео број.',
    'ip' => ':attribute мора бити валидна IP адреса.',
    'ipv4' => ':attribute мора бити валидна IPv4 адреса.',
    'ipv6' => ':attribute мора бити валидна IPv6 адреса.',
    'json' => ':attribute мора бити валидан JSON стринг.',
    'lt' => [
        'array' => ':attribute мора имати мање од :value ставки.',
        'file' => ':attribute мора бити мањи од :value килобајта.',
        'numeric' => ':attribute мора бити мањи од :value.',
        'string' => ':attribute мора бити краћи од :value карактера.',
    ],
    'lte' => [
        'array' => ':attribute не сме имати више од :value ставки.',
        'file' => ':attribute не сме бити већи од :value килобајта.',
        'numeric' => ':attribute не сме бити већи од :value.',
        'string' => ':attribute не сме бити дужи од :value карактера.',
    ],
    'mac_address' => ':attribute мора бити валидна MAC адреса.',
    'max' => [
        'array' => ':attribute не сме имати више од :max ставки.',
        'file' => ':attribute не сме бити већи од :max килобајта.',
        'numeric' => ':attribute не сме бити већи од :max.',
        'string' => ':attribute не сме бити дужи од :max карактера.',
    ],
    'max_digits' => ':attribute не сме имати више од :max цифара.',
    'mimes' => ':attribute мора бити фајл типа: :values.',
    'mimetypes' => ':attribute мора бити фајл типа: :values.',
    'min' => [
        'array' => ':attribute мора имати најмање :min ставки.',
        'file' => ':attribute мора бити најмање :min килобајта.',
        'numeric' => ':attribute мора бити најмање :min.',
        'string' => ':attribute мора бити најмање :min карактера.',
    ],
    'min_digits' => ':attribute мора имати најмање :min цифара.',
    'multiple_of' => ':attribute мора бити вишекратник броја :value.',
    'not_in' => 'Изабрани :attribute није валидан.',
    'not_regex' => 'Формат :attribute није валидан.',
    'numeric' => ':attribute мора бити број.',
    'password' => [
        'letters' => ':attribute мора садржавати најмање једно слово.',
        'mixed' => ':attribute мора садржавати најмање једно велико и једно мало слово.',
        'numbers' => ':attribute мора садржавати најмање један број.',
        'symbols' => ':attribute мора садржавати најмање један симбол.',
        'uncompromised' => ':attribute се појављује у јавним базама података. Молимо изаберите други :attribute.',
    ],
    'present' => 'Поље :attribute мора бити присутно.',
    'prohibited' => 'Поље :attribute је забрањено.',
    'prohibited_if' => 'Поље :attribute је забрањено када је :other :value.',
    'prohibited_unless' => 'Поље :attribute је забрањено осим ако је :other у :values.',
    'prohibits' => 'Поље :attribute забрањује присуство :other.',
    'regex' => 'Формат :attribute није валидан.',
    'required' => 'Поље :attribute је обавезно.',
    'required_array_keys' => 'Поље :attribute мора садржавати уносе за: :values.',
    'required_if' => 'Поље :attribute је обавезно када је :other :value.',
    'required_if_accepted' => 'Поље :attribute је обавезно када је :other прихваћено.',
    'required_unless' => 'Поље :attribute је обавезно осим ако је :other у :values.',
    'required_with' => 'Поље :attribute је обавезно када је :values присутно.',
    'required_with_all' => 'Поље :attribute је обавезно када су присутни :values.',
    'required_without' => 'Поље :attribute је обавезно када :values није присутно.',
    'required_without_all' => 'Поље :attribute је обавезно када ниједан од :values није присутан.',
    'same' => ':attribute и :other морају се поклапати.',
    'size' => [
        'array' => ':attribute мора садржавати :size ставки.',
        'file' => ':attribute мора бити :size килобајта.',
        'numeric' => ':attribute мора бити :size.',
        'string' => ':attribute мора бити :size карактера.',
    ],
    'starts_with' => ':attribute мора почети са једним од следећих: :values.',
    'string' => ':attribute мора бити ниска.',
    'timezone' => ':attribute мора бити валидна временска зона.',
    'unique' => ':attribute већ постоји.',
    'uploaded' => ':attribute није успео да се отпреми.',
    'url' => ':attribute мора бити валидан URL.',
    'uuid' => ':attribute мора бити валидан UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'прилагођена порука',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => ['service_url' => 'URL сервиса'],

    'coupon_code' => [
        'not_found' => 'Код купона није пронађен',
        'expired' => 'Овај код купона је истекао',
    ],

];

