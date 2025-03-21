<section id="latest-post">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 py-3" data-masonry='{"percentPosition": true }'>
            @foreach ($latest_posts as $latestPost)
                <div class="col-lg-4">
                    <div class="card bg-light rounded-4 shadow border-0">
                        <a href="{{ route('posts.show', ['slug' => $latestPost->slug]) }}">
                            @include('frontend.posts.components.post_image', ['post' => $latestPost])
                        </a>

                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('posts.show', ['slug' => $latestPost->slug]) }}"
                                    class="text-decoration-none">
                                    {{ $latestPost->title }}
                                </a>
                            </h4>
                            <p class="card-text mt-3">{!! Str::limit($latestPost->description, rand(25,450)) !!}</p>
                        </div>
                        <div class="card-footer border-0">
                            <a href="{{ route('posts.show', ['slug' => $latestPost->slug]) }}"
                                class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$latest_posts->links()}}
    </div>
</section>
