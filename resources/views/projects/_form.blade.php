@csrf

<div class="mb-3">
    <label for="formFile" class="form-label">Default file input example</label>
    <input name="image" class="form-control" type="file" id="formFile">
</div>
<br>

<div class="form-group">
    <label for="title">Titulo del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm" id="title" type="text" name="title"
        value="{{old( 'title',$project->title) }}">
    <br>
</div>


<div class="form-group">
    <label form="url">URL del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm" id="url" type="text" name="url"
        value="{{old( 'url',$project->url) }}">
    <br>
</div>


<div class="form-group">
    <label for="description">Descripción del proyecto </label>
    <textarea class="form-control border-0 bg-light shadow-sm"
        name="description">{{old('description',$project->description)}}</textarea>
    <br>
</div>


<button class="btn btn-primary btn-lg w-100">{{ $btnText }}</button>

<a class="btn btn-link w-100" href="{{ route('projects.index') }}">
    Cancelar
</a>
