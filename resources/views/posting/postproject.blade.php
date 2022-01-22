<section id="projects">
<div class="container p-3 my-3 bg-white border">
        <div class="row">
          <div class="col text-center mb-3">
          <marquee direction="up" scrollamount="2" align="center" behavior="alternate" width="75%"><marquee direction="right" behavior="alternate"><h1 style="color:#000;">{{ $judul }}</h1></marquee></marquee>
          </div>

          @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
          @endif
        </div>

    <div class="row justify-content-center">
        <div class="col-md-8 mb-3 mt-3">
            @foreach ($posts as $post)
            <div class="card mt-3">
                    <img src="{{ Storage::url($post->image) }}" class="img-fluid" alt="...">
                <div class="card-body">
                    <p>{{ $post->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</section>