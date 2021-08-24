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
    <x-form-input type="text" name="name" label="Name" :value="$subject->name"></x-form-input>
</div>
<div class="form-group">

    <label for="">PDF</label>
    <input class="form-control"  type="file" name="pdf" value="{{ old('pdf', $subject->plane) }}">

    @error('pdf')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror

</div>
<div class="form-group">

    <label for="">Image</label>
    <input class="form-control"  type="file" name="path_image" value="{{ old('path_image', $subject->path_image) }}">

    @error('path_image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror

</div>

    <div class="form-group">

        <label for="">Stages</label>
        <select class="js-example-basic-multiple form-control" id="select2" name="stages[]" multiple="multiple">
            @foreach($stages as $stage)
            <option value="{{$stage->id}}" style="color: black" @if($stages_ids->contains($stage->id))selected @endif>{{$stage->name}}</option>
            @endforeach
        </select>

    </div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>


