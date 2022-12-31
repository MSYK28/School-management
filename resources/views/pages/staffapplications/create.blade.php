<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />
    <title>Staff Opening Application</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-md-12 card justify-content-center">
                <div class="card-header text-center">
                    <h3>Apply to join the staff of Orange High</h3>
                    <p>Fill in the details below and submit to apply to join our school</p>
                    <a href="/" class="btn btn-sm btn-danger">Back</a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('/staffapplications')}}" accept-charset="UTF-8">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-header">
                                    <h4>Personal Details</h4>
                                    <p>This section contains a form of personal details</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Name">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="email">Your Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="row my-3">
                                        <div class="col-md-6 form-group">
                                            <label for="number">Number</label>
                                            <input type="number" name="number" id="number" class="form-control"
                                                placeholder="Phone Number">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" id="address" class="form-control"
                                                placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-header">
                                    <h4>Experience Details</h4>
                                    <p>This section contains a form of education details</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="school">Previous Organization</label>
                                            <input type="text" name="school" id="school" class="form-control"
                                                placeholder="Previous School">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="name">Referee Name</label>
                                            <input type="name" name="name" id="name" class="form-control"
                                                placeholder="Referee Name">
                                        </div>
                                    </div>

                                    <div class="row my-3">
                                        <div class="col-md-6 form-group">
                                            <label for="email">Referee Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="cert">CV</label>
                                            <input type="file" name="cert" id="cert" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
