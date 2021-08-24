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
    <x-form-input type="text" name="title" label="Title" :value="$advertisement->title"></x-form-input>
</div>
<div class="form-group">

    <label for="">Image</label>
    <input class="form-control"  type="file" name="image" value="{{ old('image', $advertisement->url) }}">

    </input>
    @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror

</div>
<div class="form-group">

    <label for="">Text</label>
    <textarea class="form-control @error('text') is-invalid @enderror" name="text">{{ old('text', $advertisement->text) }}</textarea>
    @error('text')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="status">Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status-active" value="1" @if(old('status', $advertisement->realStatus) == 1) checked @endif>
            <label class="form-check-label" for="status-active">
                Published
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status-draft" value="0" @if(old('status', $advertisement->realStatus) == 0) checked @endif>
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


