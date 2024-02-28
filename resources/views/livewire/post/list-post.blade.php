<div>
    <div class="row gap-4">
        @foreach ($posts as $post)
            <div class="card bg-base-100 shadow-xl col">
                <figure><img class="" height="200px"
                        src="https://plus.unsplash.com/premium_photo-1681582960531-7b5de57fb276?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl col">
                <figure><img class="" height="200px"
                        src="https://plus.unsplash.com/premium_photo-1681582960531-7b5de57fb276?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl col">
                <figure><img class="" height="200px"
                        src="https://plus.unsplash.com/premium_photo-1681582960531-7b5de57fb276?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl col">
                <figure><img class="" height="200px"
                        src="https://plus.unsplash.com/premium_photo-1681582960531-7b5de57fb276?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Shoes" /></figure>
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
