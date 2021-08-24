<label for="{{$name}}">{{$label}}</label>
<input type="{{$type??'text'}}"
       class="form-control @error($name) is-invalid @enderror"
       name="{{$name}}"
       value="{{ old($name, $value??null) }}">
@error($name)
<p class="invalid-feedback">{{ $message }}</p>
@enderror
