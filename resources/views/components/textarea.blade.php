@props(['disabled' => false, 'value' => ""])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-yellow-500
focus:ring-yellow-500 rounded-md shadow-sm w-full']) !!}>{{ $slot ? $slot : $value }}</textarea>