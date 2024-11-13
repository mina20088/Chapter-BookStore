@props([
    'type' => 'text',
    'name' => null,
    'id' => null,
    'placeholder' => 'name@example.com'
])

<input
    {{$attributes->class(['form-control'])->merge(['type' => $type, 'name' => $name, 'id' => $id  , 'placeholder' => $placeholder])}}
/>
