@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h3>All Posts</h3>
            </div>
            @forelse ($posts as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $post->title }}
                        </h5>

                        <div class="card-body">
                            {{ $post->body }}
                        </div>

                        <a href="#" class="card-link">Card link</a>

                            <div>
                                <favorite
                                    :post={{ $post->id }}
                                    :favorited={{ $post->favorited() ? 'true' : 'false' }}
                                ></favorite>
                            </div>
                    </div>
                </div>
            @empty
                <p>No post created.</p>
            @endforelse

            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
