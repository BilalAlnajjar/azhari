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
    <x-form-input type="text" name="title" label="Title" :value="$visual->title"></x-form-input>
</div>

<div class="form-group">

    <label for="">Brief Details (Do not exceed 20 words)</label>
    <textarea id="summernote4" name="brief_details">{{ old('brief_details', $visual->brief_details) }}</textarea>
    @error('brief_details')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
 <div class="form-group">

     <x-form-input type="text" name="link" label="Link (http://www.youtube.com/watch?v=OLKM_SolI5Y)" :value="$visual->link"></x-form-input>

 </div>

<div class="form-group">
    <label for="status">Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status-active" value="1" @if(old('status', $visual->realStatus) == 1) checked @endif>
            <label class="form-check-label" for="status-active">
                Published
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status-draft" value="0" @if(old('status', $visual->realStatus) == 0) checked @endif>
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


