@csrf
<div class="custom-file">
    <input name="image" type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
</div>

<div class="form-group">
    <label for="name">Titulo del proyecto</label>
    <input
        class="form-control bg-light shadow-sm"
        id="title"
        name="title"
        value="{{ old('title') }}">
</div>
<div class="form-group">
    <label for="name">URL del proyecto</label>
    <input
        class="form-control bg-light shadow-sm"
        id="url"
        type="text"
        name="url"
        value="{{ old('url', $project->url) }}">
</div>
<div class="form-group">
    <label for="name">Descripción del proyecto</label>
    <input
        class="form-control bg-light shadow-sm"
        id="description"
        name="description"
        value="{{ old('description', $project->description) }}">
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>

<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">
    Cancelar
</a>







