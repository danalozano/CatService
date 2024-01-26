<!-- resources/views/cat/index.blade.php -->

<h1>Lista de imágenes de gatos</h1>

@foreach ($catImages as $catImage)
    <div>
        <strong>ID:</strong> {{ $catImage->_id }}<br>
        <strong>Mimetype:</strong> {{ $catImage->mimetype }}<br>
        <strong>Tamaño:</strong> {{ $catImage->size }}<br>
        <strong>Etiquetas:</strong>

        @if ($catImage->tags)
            @foreach (json_decode($catImage->tags) as $tag)
                <span class="badge badge-primary">{{ $tag }}</span>
            @endforeach
        @else
            <span>Sin etiquetas</span>
        @endif
    </div>
    <hr>
@endforeach
