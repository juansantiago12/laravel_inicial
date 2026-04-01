{{-- Este es un componente de alerta personalizado que se puede usar en cualquier parte de la aplicación. El componente acepta dos propiedades: 'type' para determinar el estilo de la alerta (info, success, warning, error) y 'title' para mostrar un título en la alerta. El contenido de la alerta se pasa a través del slot. --}}
@props(['type', 'title'])

@php
    switch ($type) {
        case 'info':
            $bgColor = 'bg-blue-100';
            $borderColor = 'border-blue-400';
            $textColor = 'text-blue-700';
            $iconColor = 'text-blue-500';
            break;
        case 'success':
            $bgColor = 'bg-green-100';
            $borderColor = 'border-green-400';
            $textColor = 'text-green-700';
            $iconColor = 'text-green-500';
            break;
        case 'warning':
            $bgColor = 'bg-yellow-100';
            $borderColor = 'border-yellow-400';
            $textColor = 'text-yellow-700';
            $iconColor = 'text-yellow-500';
            break;
        case 'error':
            $bgColor = 'bg-red-100';
            $borderColor = 'border-red-400';
            $textColor = 'text-red-700';
            $iconColor = 'text-red-500';
            break;

        default:
            $bgColor = 'bg-gray-100';
            $borderColor = 'border-gray-400';
            $textColor = 'text-gray-700';
            $iconColor = 'text-gray-500';
            break;
    }
@endphp

{{-- Componente de alerta personalizado --}}
<div class="{{ $bgColor }} border {{ $borderColor }} text {{ $textColor }} px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">{{ $title }}</strong>
  <span class="block sm:inline">{{ $slot }}</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 {{ $iconColor }}" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>
