<div>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($posts as $post)
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ Storage::url($post->thumbnail) }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
