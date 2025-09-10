@props(['label', 'type' => 'text', 'name', 'value' => '', 'required' => false, 'placeholder' => ''])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}"
        class="form-control" @if($required) required @endif>
</div>
