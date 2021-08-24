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
    @if($button=='Update')
    <img src="{{$slider->path_image}}" width="150px" alt="">
    @endif
    <label for="">Image</label>
    <input class="form-control"  type="file" name="path_image" value="{{ old('path_image', $slider->path_image) }}">
    @error('path_image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>



<div class="form-group">
    <label for="status">Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status-active" value="1" @if(old('status', $slider->realStatus) == 1) checked @endif>
            <label class="form-check-label" for="status-active">
                Published
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status-draft" value="0" @if(old('status', $slider->realStatus) == 0) checked @endif>
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


