<div>
<h1>Lista de imágenes de gatos</h1>

@foreach ($catImages as $catImage)
    {{ $catImage->_id }}
    <!-- Mostrar otros campos según sea necesario -->
@endforeach

</div>
