@csrf 

<label for="title">Título del proyecto</label>
<p>   
    <input type="text" name="title" value="{{ old('title', $project->title)  }}">
</p>

    <label for="url">URL del proyecto</label>
<p>
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</p>

 <label for="description">Descripción del proyecto</label>
<p>
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
</p>
<br>

<button>{{ $btnText }}</button>