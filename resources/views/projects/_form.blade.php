@csrf

<!--Mostrar titulo e imagen del proyecto-->
@if ($project->image)
<img class="card-img-top mb-3" style="height: 200px; object-fit:cover" src="/storage/{{ $project->image }}"
    alt="{{ $project->title }}">
@endif

<!--Forma para elegir imagen del proyecto-->
<div class="mb-3">
    <label for="formFile" class="form-label">Selecciona una imagen para el proyecto</label>
    <input name="image" class="form-control" type="file" id="formFile">
</div>


<!--Forma para elegir categoría del proyecto-->
<div class="mb-3">
    <label for="category_id">Categoria del proyecto</label>
    <select name="category_id" id="category_id" class="form-select">

        <option value="">Selecciona una categoría</option>
        @foreach($categories as $id=>$name)
        <option value="{{$id}}" @if ($id==old('category_id',$project->category_id )) selected
            @endif
            >
            {{ $name }}</option>
        @endforeach
    </select>
</div>



<!--Forma para mostrar el título del proyecto-->
<div class="form-group">
    <label for="title">Titulo del proyecto</label>
    <input class="form-control" id="title" type="text" name="title" value="{{old( 'title',$project->title) }}">
    <br>
</div>


<!--Forma para mostrar el campo URL del proyecto-->
<div class="form-group">
    <label form="url">URL del proyecto</label>
    <input class="form-control" id="url" type="text" name="url" value="{{old( 'url',$project->url) }}">
    <br>
</div>


<!--Forma para mostrar el campo descripción del proyecto-->
<div class="form-group">
    <label for="description">Descripción del proyecto </label>
    <textarea class="form-control" name="description">{{old('description',$project->description)}}</textarea>
</div>

<!--Botón para Guardar el proyecto-->
<button class="btn btn-primary btn-lg w-100">{{ $btnText }}</button>


<!--Botón para cancelar accioes dentro del proyecto-->
<a class="btn btn-link w-100" href="{{ route('projects.index') }}">
    Cancelar
</a>
