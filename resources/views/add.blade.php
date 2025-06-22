<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


    <div class="bg-gray-400 ">
        <h1 class="text-center">Form</h1>
    </div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <a class="navbar-brand btn btn-primary text-white" href="{{ route('index') }}"><- Back</a>
    </div>
    </div>
</nav>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
       <form action="{{ route('store') }}" method="POST">
        @csrf
         <tr>
            <td>
                <input value="{{ old('name')}}" type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </td>
            <td>
                <input value="{{ old('email')}}" type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </td>
            <td>
                <button class="btn btn-primary">Submit</button>
            </td>

        </tr>
       </form>

    </tbody>
</table>
