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

    'accepted' => ':attribute mora biti prihvaćen.',
    'accepted_if' => ':attribute mora biti prihvaćen kada je :other :value.',
    'active_url' => ':attribute nije validan URL.',
    'after' => ':attribute mora biti datum posle :date.',
    'after_or_equal' => ':attribute mora biti datum posle ili jednak :date.',
    'alpha' => ':attribute može sadržavati samo slova.',
    'alpha_dash' => ':attribute može sadržavati samo slova, brojeve, crtice i donje crte.',
    'alpha_num' => ':attribute može sadržavati samo slova i brojeve.',
    'array' => ':attribute mora biti niz.',
    'before' => ':attribute mora biti datum pre :date.',
    'before_or_equal' => ':attribute mora biti datum pre ili jednak :date.',
    'between' => [
        'array' => ':attribute mora imati između :min i :max stavki.',
        'file' => ':attribute mora biti između :min i :max kilobajta.',
        'numeric' => ':attribute mora biti između :min i :max.',
        'string' => ':attribute mora biti između :min i :max karaktera.',
    ],
    'boolean' => 'Polje :attribute mora biti tačno ili netačno.',
    'confirmed' => 'Potvrda :attribute se ne poklapa.',
    'current_password' => 'Lozinka nije tačna.',
    'date' => ':attribute nije validan datum.',
    'date_equals' => ':attribute mora biti datum jednak :date.',
    'date_format' => ':attribute se ne poklapa sa formatom :format.',
    'declined' => ':attribute mora biti odbijen.',
    'declined_if' => ':attribute mora biti odbijen kada je :other :value.',
    'different' => ':attribute i :other moraju biti različiti.',
    'digits' => ':attribute mora imati :digits cifara.',
    'digits_between' => ':attribute mora imati između :min i :max cifara.',
    'dimensions' => ':attribute ima nevažeće dimenzije slike.',
    'distinct' => 'Polje :attribute ima duplu vrednost.',
    'doesnt_end_with' => ':attribute ne sme završavati sa: :values.',
    'doesnt_start_with' => ':attribute ne sme počinjati sa: :values.',
    'email' => ':attribute mora biti validna email adresa.',
    'ends_with' => ':attribute mora završavati sa: :values.',
    'enum' => 'Izabrani :attribute nije validan.',
    'exists' => 'Izabrani :attribute nije validan.',
    'file' => ':attribute mora biti fajl.',
    'filled' => 'Polje :attribute mora imati vrednost.',
    'gt' => [
        'array' => ':attribute mora imati više od :value stavki.',
        'file' => ':attribute mora biti veći od :value kilobajta.',
        'numeric' => ':attribute mora biti veći od :value.',
        'string' => ':attribute mora biti duži od :value karaktera.',
    ],
    'gte' => [
        'array' => ':attribute mora imati :value stavki ili više.',
        'file' => ':attribute mora biti veći ili jednak :value kilobajta.',
        'numeric' => ':attribute mora biti veći ili jednak :value.',
        'string' => ':attribute mora biti duži ili jednak :value karaktera.',
    ],
    'image' => ':attribute mora biti slika.',
    'in' => 'Izabrani :attribute nije validan.',
    'in_array' => 'Polje :attribute ne postoji u :other.',
    'integer' => ':attribute mora biti ceo broj.',
    'ip' => ':attribute mora biti validna IP adresa.',
    'ipv4' => ':attribute mora biti validna IPv4 adresa.',
    'ipv6' => ':attribute mora biti validna IPv6 adresa.',
    'json' => ':attribute mora biti validan JSON string.',
    'lt' => [
        'array' => ':attribute mora imati manje od :value stavki.',
        'file' => ':attribute mora biti manji od :value kilobajta.',
        'numeric' => ':attribute mora biti manji od :value.',
        'string' => ':attribute mora biti kraći od :value karaktera.',
    ],
    'lte' => [
        'array' => ':attribute ne sme imati više od :value stavki.',
        'file' => ':attribute ne sme biti veći od :value kilobajta.',
        'numeric' => ':attribute ne sme biti veći od :value.',
        'string' => ':attribute ne sme biti duži od :value karaktera.',
    ],
    'mac_address' => ':attribute mora biti validna MAC adresa.',
    'max' => [
        'array' => ':attribute ne sme imati više od :max stavki.',
        'file' => ':attribute ne sme biti veći od :max kilobajta.',
        'numeric' => ':attribute ne sme biti veći od :max.',
        'string' => ':attribute ne sme biti duži od :max karaktera.',
    ],
    'max_digits' => ':attribute ne sme imati više od :max cifara.',
    'mimes' => ':attribute mora biti fajl tipa: :values.',
    'mimetypes' => ':attribute mora biti fajl tipa: :values.',
    'min' => [
        'array' => ':attribute mora imati najmanje :min stavki.',
        'file' => ':attribute mora biti najmanje :min kilobajta.',
        'numeric' => ':attribute mora biti najmanje :min.',
        'string' => ':attribute mora biti najmanje :min karaktera.',
    ],
    'min_digits' => ':attribute mora imati najmanje :min cifara.',
    'multiple_of' => ':attribute mora biti višekratnik broja :value.',
    'not_in' => 'Izabrani :attribute nije validan.',
    'not_regex' => 'Format :attribute nije validan.',
    'numeric' => ':attribute mora biti broj.',
    'password' => [
        'letters' => ':attribute mora sadržavati najmanje jedno slovo.',
        'mixed' => ':attribute mora sadržavati najmanje jedno veliko i jedno malo slovo.',
        'numbers' => ':attribute mora sadržavati najmanje jedan broj.',
        'symbols' => ':attribute mora sadržavati najmanje jedan simbol.',
        'uncompromised' => ':attribute se pojavljuje u javnim bazama podataka. Molimo izaberite drugi :attribute.',
    ],
    'present' => 'Polje :attribute mora biti prisutno.',
    'prohibited' => 'Polje :attribute je zabranjeno.',
    'prohibited_if' => 'Polje :attribute je zabranjeno kada je :other :value.',
    'prohibited_unless' => 'Polje :attribute je zabranjeno osim ako je :other u :values.',
    'prohibits' => 'Polje :attribute zabranjuje prisustvo :other.',
    'regex' => 'Format :attribute nije validan.',
    'required' => 'Polje :attribute je obavezno.',
    'required_array_keys' => 'Polje :attribute mora sadržavati unose za: :values.',
    'required_if' => 'Polje :attribute je obavezno kada je :other :value.',
    'required_if_accepted' => 'Polje :attribute je obavezno kada je :other prihvaćeno.',
    'required_unless' => 'Polje :attribute je obavezno osim ako je :other u :values.',
    'required_with' => 'Polje :attribute je obavezno kada je :values prisutno.',
    'required_with_all' => 'Polje :attribute je obavezno kada su prisutni :values.',
    'required_without' => 'Polje :attribute je obavezno kada :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno kada nijedan od :values nije prisutan.',
    'same' => ':attribute i :other moraju se poklapati.',
    'size' => [
        'array' => ':attribute mora sadržavati :size stavki.',
        'file' => ':attribute mora biti :size kilobajta.',
        'numeric' => ':attribute mora biti :size.',
        'string' => ':attribute mora biti :size karaktera.',
    ],
    'starts_with' => ':attribute mora početi sa jednim od sledećih: :values.',
    'string' => ':attribute mora biti niska.',
    'timezone' => ':attribute mora biti validna vremenska zona.',
    'unique' => ':attribute već postoji.',
    'uploaded' => ':attribute nije uspeo da se otpremi.',
    'url' => ':attribute mora biti validan URL.',
    'uuid' => ':attribute mora biti validan UUID.',

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
            'rule-name' => 'prilagođena-poruka',
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

    'attributes' => ['service_url' => 'URL servisa'],

    'coupon_code' => [
        'not_found' => 'Kod kupona nije pronađen',
        'expired' => 'Ovaj kod kupona je istekao',
    ],

];



