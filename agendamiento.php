<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="./views/img/99.jpeg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-4/assets/css/registration-4.css">
<link rel="icon" href="./views/img/99.jpeg" type="image/x-icon">
</head>
<body>

<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="card border-light-subtle shadow-sm">
      <div class="row g-0">
        <div class="col-12 col-md-6">
          <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="./views/img/2.webp" alt="BootstrapBrain Logo">
        </div>
        <div class="col-12 col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h3">AGENDAMIENTO DE CITA</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Rellena los campos para agendar la cita</h3>
                </div>
              </div>
            </div>
            <form action="#!">
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="firstName" class="form-label">Nombre Completo <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="firstName" id="firstName" placeholder="Nombre y Apellido" required>
                </div>
                <div class="col-12">
                  <label for="lastName" class="form-label">Fecha y hora <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="lastName" id="lastName" placeholder="Fecha y hora" required>
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Correo electronico <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Tipo de corte<span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" value="" required>
                </div>
                </div>
                <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="firstName" class="form-label">Tipo de pago <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="firstName" id="firstName" placeholder="Tipo de pago" required>
                </div>
                
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                    <label class="form-check-label text-secondary" for="iAgree">Estas seguro de agendar la cita?<a href="#!" class="link-primary text-decoration-none"></a>
                    </label>
                  </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-primary" type="submit">AGENDAR CITA</button>
                  </div>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>