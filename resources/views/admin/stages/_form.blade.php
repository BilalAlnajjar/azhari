@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <x-form-input type="text" name="name" label="Name" :value="$stage->name"></x-form-input>
</div>
<div class="form-group">

    <label for="">Image</label>
    <input class="form-control"  type="file" name="path_image" value="{{ old('path_image', $stage->path_image) }}">

    @error('path_image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror

</div>
<div class="form-group">

    <label for="">Main stage</label>
    <select name="main_stage" class="form-control" id="">
        <option value="transport_stage" @if($stage->main_stage=='transport_stage') selected @endif>Transport Stage</option>
        <option value="high_school" @if($stage->main_stage=='high_school') selected @endif>High School</option>
    </select>
    @error('main_stage')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>


