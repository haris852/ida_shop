<a href="{{ route('admin.user.edit', $data->id) }}" class="btn btn-primary me-1 py-2">
    Ubah
</a>
<button onclick="btnDelete('{{ $data->id }}', '{{ $data->name }}')" class="btn btn-danger py-2">
    Hapus
</button>


