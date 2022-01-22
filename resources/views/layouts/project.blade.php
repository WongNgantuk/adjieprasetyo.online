 <!-- Start Project -->
 <section id="projects">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-3">
            <h2 style="color:#fff;">My Projects</h2>
          </div>

          @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
          @endif
        </div>

        <div class="row justify-content-center">
          @foreach ($posts as $post)
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ Storage::url($post->image) }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">{{ $post->title }}</p>
                    <a href="{{ url('/project', $post->title) }}" class="btn btn-primary stretched-link">Lihat Selengkapnya...</a>
                  </div>
              </div>
            </div>
            
          @endforeach
        </div>
      
        {!! $posts->links() !!}
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L24,128C48,128,96,128,144,138.7C192,149,240,171,288,149.3C336,128,384,64,432,48C480,32,528,64,576,106.7C624,149,672,203,720,234.7C768,267,816,277,864,272C912,267,960,245,1008,208C1056,171,1104,117,1152,112C1200,107,1248,149,1296,160C1344,171,1392,149,1416,138.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Project -->