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
    <x-form-input type="text" name="title" label="Title" :value="$acoustic->title"></x-form-input>
</div>

<div class="form-group">

    <label for="">Brief Details (Do not exceed 20 words)</label>
    <textarea class="form-control @error('brief_details') is-invalid @enderror" name="brief_details">{{ old('brief_details', $acoustic->brief_details) }}</textarea>
    @error('brief_details')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">

    <label for="">Audio code from soundcloud</label>
    <textarea class="form-control @error('code') is-invalid @enderror" name="code">{{ old('code', $acoustic->code) }}</textarea>
    @error('brief_details')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">

    <label for="">Image</label>
    <input class="form-control"  type="file" name="image_path" value="{{ old('image_path', $acoustic->path_image) }}">
    @error('image_path')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror

</div>
<div class="form-group">
    <label for="status">Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status-active" value="1" @if(old('status', $acoustic->realStatus) == 1) checked @endif>
            <label class="form-check-label" for="status-active">
                Published
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status-draft" value="0" @if(old('status', $acoustic->realStatus) == 0) checked @endif>
            <label class="form-check-label" for="status-draft">
                Not Published
            </label>
        </div>
    </div>
    @error('status')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>


