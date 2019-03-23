@extends('sectionpaket.NavbarPaket')

@section('content')

    <section>
        <div class="row">
            <div class="col-md-12">
                <a href="" class="text-dark text-center"><h1>Paket Instan</h1> </a>
                <div class="text-center">
                  <img src="/images/instan.png" alt="paket" />
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
                @foreach ($mapels as $data)
                  <option>{{ $data->mata_pelajaran }}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
                Pilih Mata Pelajaran
              </div>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Jadwal</label>
             <input name="tanggal" type="date" value="" class="form-control" id="optionTanggal" placeholder="Pilih tanggal" required>
              <div class="invalid-feedback">
                Pilih Tanggal
              </div>
            </div>

            <div class="form-group col-md-3">
              <label for="inputEmail4" style="opacity: 0;">:</label>
              <select name="jam" class="form-control" id="optionJam" required>
                <option disabled="disable" selected="true" value="">Pilih Jam</option>
                @foreach ($jam_kursuss as $data)
                  <option>{{ $data->jam_kursus }}</option>
                @endforeach
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


          <div class="form-row" id="formTutor">
            
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
