@if (isset($label))
    <label for="{{ $id ?? $name }}">{{ $label }}</label>
@endif
<select name="{{ $name }}" id="{{ $id ?? $name }}" class="form-control @error($name) is-invalid @enderror">
    <option value=""></option>
    @foreach ($options as $value => $text)
        <option value="{{ $text }}" {{ ($text == old($name, ($selected ?? null)))? 'selected':''}}>{{ $value }}</option>
    @endforeach
</select>

@error($name)
<p class="invalid-feedback">{{ $message }}</p>
@enderror
