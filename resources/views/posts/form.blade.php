<x-layout>
    <div class="p-4">
        <form method="POST" action="{{ $post->exists ? route('posts.update', $post) : route('posts.store') }}">
            @csrf
            @if($post->exists) @method('PUT') @endif

            <div class="form-group mb-3">
                <label>Título</label>
                <input name="title" class="form-control" value="{{ old('title', $post->title) }}">
                @error('title') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group mb-3">
                <label>Contenido</label>
                <textarea name="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
                @error('content') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="draft" @selected(old('status', $post->status) === 'draft')>Borrador</option>
                    <option value="published" @selected(old('status', $post->status) === 'published')>Publicado</option>
                </select>
                @error('status') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <button class="btn btn-primary mt-2">{{ $post->exists ? 'Actualizar' : 'Crear' }}</button>
            <button type="button" class="btn btn-danger mt-2" onclick="window.history.back()">Cancelar</button>
        </form>
    </div>
</x-layout>