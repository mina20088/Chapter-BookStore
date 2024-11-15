@props([
    'type' => 'text',
    'name' => null,
    'id' => null,
    'placeholder' => 'name@example.com'
])

<input
    {{$attributes->class(['form-control','border-top-0' ,'border-end-0', 'border-start-0'])->merge(['type' => $type, 'name' => $name, 'id' => $id  , 'placeholder' => $placeholder])}}
/>
