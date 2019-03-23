@extends('sectionpaket.NavbarPaket')

@section('content')

    <section id="paketintensif">
        <div class="row">
            <div class="col-md-12">
                <a href="/paketintensif" class="text-dark text-center"><h1>Paket Intensif</h1> </a>
                <div class="text-center">
                  <img src="/images/intensif.png" alt="paket" />
                </div>
                  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est optio, labore ex minima ut, magni minus culpa ipsa. Blanditiis dolore, magnam non, numquam quo odio ad praesentium repudiandae illum obcaecati.</p>
            </div>
        </div>
    </section>

   <div class="container">
        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="formGroupExampleInput">Mata Pelajaran</label>
              <select class="form-control" id="exampleFormControlSelect1" required>
                <option disabled="disable" selected="true" value="">Pilih Mata pelajaran yang anda inginkan</option>
                <option>2asasasasas</option>
                <option>3asasasasas</option>
                <option>4asasasasas</option>
                <option>5asasasasas</option>
              </select>
              <div class="invalid-feedback">
                Pilih Mata Pelajaran
              </div>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Jadwal</label>
             <input name="tanggal" type="date" value="" class="form-control" id="formGroupExampleInput" placeholder="Pilih tanggal" required>
              <div class="invalid-feedback">
                Pilih Tanggal
              </div>
            </div>

            <div class="form-group col-md-3">
              <label for="inputEmail4" style="opacity: 0;">:</label>
              <select name=jam class="form-control" id="exampleFormControlSelect1" required>
                <option disabled="disable" selected="true" value="">Pilih Jam</option>
                <option>2asasasasas</option>
                <option>3asasasasas</option>
                <option>4asasasasas</option>
                <option>5asasasasas</option>
              </select>
              <div class="invalid-feedback">
                Pilih Jam
              </div>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group">
              <label for="formGroupExampleInput">Materi</label>
              <input name="materi" type="text" value="" class="form-control" id="formGroupExampleInput" placeholder="Tulis materi yang ingin anda pelajari" required>
              <div class="invalid-feedback">
                Isi Materi yang diinginkan
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="formGroupExampleInput">Pilih Tutor</label>
            </div>
          </div>


          <div class="form-row">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tutor" id="exampleRadios1" value="option1" required>
              <label class="form-check-label" for="exampleRadios1">
                <div class="card" style="width: 10rem;">
                  <img src="/images/favicon.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">nama Tutor</h5>
                  </div>
                </div>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tutor" id="exampleRadios2" value="option2"required>
              <label class="form-check-label" for="exampleRadios2">
                <div class="card" style="width: 10rem;">
                  <img src="/images/favicon.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">nama Tutor</h5>
                  </div>
                </div>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tutor" id="exampleRadios3" value="option3"required>
              <label class="form-check-label" for="exampleRadios3">
                <div class="card" style="width: 10rem;">
                  <img src="/images/favicon.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">nama Tutor</h5>
                  </div>
                </div>
              </label>
              <div class="invalid-feedback">Pilih Tutor</div>
            </div>
          </div>



       
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
      </div>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

@endsection
