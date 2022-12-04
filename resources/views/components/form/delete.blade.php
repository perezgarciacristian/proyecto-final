<form action="{{ $url }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Eliminar" class="btn btn-danger">
</form>
