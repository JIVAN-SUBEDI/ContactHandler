<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid mt-2">


        <div class="row">
            <div class="col-md-4 bg-light d-flex align-items-center justify-content-center flex-column">
                <h3 class="">Get In Touch</h3>
                <p class="text-muted text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
                    molestias vel nesciunt voluptas facilis quidem nam obcaecati et accusamus doloribus. Accusamus,
                    consectetur! Nulla, at pariatur corrupti a dolorum cumque similique architecto? Optio, sunt adipisci
                    nemo deleniti natus eligendi dolores quibusdam doloremque, provident animi sint illo ad repellat
                    veniam obcaecati at!</p>


            </div>
            <div class="col-md-8">
                <h3 class="text-center mt-4">Contact Information</h3>
                <form action="{{ route('contact') }}" method="post">
                    @method('post')
                    @csrf
                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" placeholder="Full Name" name="name" class="form-control">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label ">Email</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="someone@example.com">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <label for="" class="form-label mt-2">subject</label>
                        <input type="text" name="subject" id="" class="form-control" placeholder="subject">
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span><br>
                        @enderror
                        <label for="" class="form-label mt-2">Message</label>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="d-flex justify-content-end mt-2">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="status">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <p>{{session('status')}}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <script>
    $(document).ready(function () {
        @if(session('status'))
        $('#status').modal('show');
        @endif
    });
    </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
