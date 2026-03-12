<x-layout>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col">
                <a> Hola </a>
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <!--
                @if(session('message'))
                    <div class="alert alert-secondary mb-3">{{ session('message') }}</div>
                @endif
                -->

                <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">New Post</a>

                <div class="d-flex flex-column gap-3">
                    @foreach($posts as $post)
                        <div class="card w-100" style="min-height: 180px;">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <h6 class="card-title fw-bold mb-1">{{ $post->title }}</h6>
                                    <span class="badge bg-secondary">{{ match($post->status) {
                                        'draft' => 'Borrador',
                                        'published' => 'Publicado',
                                        'archived' => 'Archivado',
                                    } }}</span>
                                </div>
                                <p class="card-text flex-grow-1">{{ $post->content }}</p>
                                <div class="d-flex justify-content-end gap-2 mt-2">
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    {{ $posts->links() }}
                </div>

            </div>
            <div class="col">
                <a> Hola </a>
            </div>
        </div>
    </div>
</x-layout>