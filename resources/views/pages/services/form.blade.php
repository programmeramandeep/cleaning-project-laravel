<div class="form-group">
    <label for="title">Title</label>

    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Service Title" value="{{ old('title', $service->title) }}" required />

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="label">Label</label>

    <input type="text" name="label" id="label" class="form-control @error('label') is-invalid @enderror" placeholder="Enter Service Label" value="{{ old('label', $service->label) }}" required />

    @error('label')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">Description</label>

    <textarea rows="5" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Service Description" required>{{ old('description', $service->description) }}</textarea>

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="image">Upload Service Image</label>
    <br />
    <input type="hidden" name="old_image" value="{{ $service->image }}">
    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    @if ($service->image)
        <div class="row mt-3">
            <div class="col-md-3">
                <img src="{{ Storage::url($service->image) }}" alt="" class="img-fluid">
            </div>
        </div>
    @endif
</div>

<div class="form-group text-center">
    <hr />

    <button type="submit" class="btn btn-dark btn-sm">{{ $btn_text }}</button>
    <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
</div>
