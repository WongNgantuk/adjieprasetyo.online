 <!-- Start Contact -->
 <section id="contact">
      <div class="row text-center mb-3">
        <div class="col">
            <h2>Contact Me</h2>
        </div>
      </div>
      <section class="row justify-content-center">
        <div class="col-md-4">

        <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
          <strong>Terimakasih !</strong> Pesan anda sudah kami terima.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

          <form name="submit-to-google-sheet">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>

          </form>
        </div>
      </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#565656" fill-opacity="1" d="M0,128L24,128C48,128,96,128,144,138.7C192,149,240,171,288,149.3C336,128,384,64,432,48C480,32,528,64,576,106.7C624,149,672,203,720,234.7C768,267,816,277,864,272C912,267,960,245,1008,208C1056,171,1104,117,1152,112C1200,107,1248,149,1296,160C1344,171,1392,149,1416,138.7L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
    </section>
    <!-- End Contact -->
    
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbylsDI5pOKZoFWAMVJGFZlgOZQ_2IexfUlFkXgzDTG4JoDUwta9Bu8PuJarETh3lTK0/exec'

        const form = document.forms['submit-to-google-sheet']
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');

        form.addEventListener('submit', e => {
          e.preventDefault()
          // Ketika tombol submit diklik
          // Tampilkan tombol loading, hilangkan tombol kirim
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
              // Tampilkan tombol kirim hilangkan tombol loading
              btnLoading.classList.toggle('d-none');
              btnKirim.classList.toggle('d-none');
              // Tampilkan alert
              myAlert.classList.toggle('d-none');
              // Reset form
              form.reset();
              console.log('Success!', response)
              })
            .catch(error => console.error('Error!', error.message))
        })
    </script>