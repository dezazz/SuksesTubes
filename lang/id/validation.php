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

    'accepted'               => ':atribut harus diterima.',
    'active_url'             => ':atribut bukan URL yang valid.',
    'after'                  => ':atribut harus berupa tanggal setelah :date.',
    'after_or_equal'         => ':atribut harus berupa tanggal setelah atau sama dengan :date.',
    'alpha'                  => ':atribut hanya boleh berisi huruf.',
    'alpha_dash'             => ':atribut hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num'              => ':atribut hanya boleh berisi huruf dan angka.',
    'array'                  => ':atribut harus berupa array.',
    'before'                 => ':atribut harus berupa tanggal sebelum :date.',
    'before_or_equal'        => ':atribut harus berupa tanggal sebelum atau sama dengan :date.',
    'between'                => [
        'numeric'   => ':atribut harus di antara :min dan :max.',
        'file'      => ':atribut harus di antara :min dan :max kilobita.',
        'string'    => ':atribut harus di antara :min dan :max karakter.',
        'array'     => ':atribut harus di antara :min dan :max item.',
    ],
    'boolean'               => ':atribut harus bernilai benar atau salah.',
    'confirmed'             => 'Konfirmasi :atribut tidak cocok.',
    'date'                  => ':atribut bukan tanggal yang valid.',
    'date_format'           => ':atribut tidak cocok dengan format :format.',
    'different'             => ':atribut dan :other harus berbeda.',
    'digits'                => ':atribut harus terdiri dari :digits digit.',
    'digits_between'        => ':atribut harus terdiri dari :min sampai :max digit.',
    'dimensions'            => ':atribut memiliki dimensi gambar yang tidak valid.',
    'distinct'              => ':atribut memiliki nilai yang duplikat.',
    'email'                 => ':atribut harus berupa alamat email yang valid.',
    'exists'                => ':atribut yang dipilih tidak valid.',
    'file'                  => ':atribut harus berupa file.',
    'filled'                => ':atribut harus memiliki nilai.',
    'gt'                    => [
        'numeric'   => ':atribut harus lebih besar dari :value.',
        'file'      => ':atribut harus lebih besar dari :value kilobita.',
        'string'    => ':atribut harus lebih besar dari :value karakter.',
        'array'     => ':atribut harus memiliki lebih dari :value item.',
    ],
    'gte'                   => [
        'numeric'   => ':atribut harus lebih besar dari atau sama dengan :value.',
        'file'      => ':atribut harus lebih besar dari atau sama dengan :value kilobita.',
        'string'    => ':atribut harus lebih besar dari atau sama dengan :value karakter.',
        'array'     => ':atribut harus memiliki :value item atau lebih.',
    ],
    'image'                 => ':atribut harus berupa gambar.',
    'in'                    => ':atribut yang dipilih tidak valid.',
    'in_array'              => ':atribut tidak terdapat dalam :other.',
    'integer'               => ':atribut harus berupa bilangan bulat.',
    'ip'                    => ':atribut harus berupa alamat IP yang valid.',
    'ipv4'                  => ':atribut harus berupa alamat IPv4 yang valid.',
    'ipv6'                  => ':atribut harus berupa alamat IPv6 yang valid.',
    'json'                  => ':atribut harus berupa JSON string yang valid.',
    'lt'                    => [
        'numeric'   => ':atribut harus kurang dari :value.',
        'file'      => ':atribut harus kurang dari :value kilobita.',
        'string'    => ':atribut harus kurang dari :value karakter.',
        'array'     => ':atribut harus memiliki kurang dari :value.',
    ],
    'lte' => [
        'numeric' => ':attribute harus kurang dari atau sama dengan :value.',
        'file' => ':attribute harus kurang dari atau sama dengan :value kilobita.',
        'string' => ':attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => ':attribute tidak boleh memiliki lebih dari :value item.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file' => ':attribute tidak boleh lebih besar dari :max kilobita.',
        'string' => ':attribute tidak boleh lebih besar dari :max karakter.',
        'array' => ':attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'numeric' => ':attribute harus setidaknya :min.',
        'file' => ':attribute harus setidaknya :min kilobita.',
        'string' => ':attribute harus setidaknya :min karakter.',
        'array' => ':attribute harus memiliki setidaknya :min item.',
    ],
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'present' => 'Kolom :attribute harus ada.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => 'Kolom :attribute harus diisi.',
    'required_if' => 'Kolom :attribute harus diisi bila :other adalah :value.',
    'required_unless' => 'Kolom :attribute harus diisi kecuali :other ada dalam :values.',
    'required_with' => 'Kolom :attribute harus diisi bila :values ada.',
    'required_with_all' => 'Kolom :attribute harus diisi bila :values ada.',
    'required_without' => 'Kolom :attribute harus diisi bila :values tidak ada.',
    'required_without_all' => 'Kolom :attribute harus diisi bila tidak ada :values yang ada.',
    'same' => ':attribute dan :other harus cocok.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus berukuran :size kilobita.',
        'string' => ':attribute harus berukuran :size karakter.',
        'array' => ':attribute harus memiliki :size item.',
    ],
    'string'               => ':atribut harus berupa string.',
    'timezone'             => ':atribut harus berupa zona waktu yang valid.',
    'unique'               => ':atribut telah digunakan sebelumnya.',
    'uploaded'             => ':atribut gagal diunggah.',
    'url'                  => 'format :atribut tidak valid.',
    

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for atributs using the
    | convention "atribut.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given atribut rule.
    |
    */

    'custom' => [
        'atribut-name' => [
            'rule-name' => 'pesan khusus',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation atributs
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap atribut place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'atributs' => [],

];
