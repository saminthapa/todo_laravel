<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


    <div class="bg-gray-400 ">
        <h1 class="text-center">View Profile</h1>
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
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>

        </tr>
    </thead>
    <tbody>
         <tr>
            <td>
                <p>{{ $Data->id}}</p>
            </td>
            <td>
                <p>{{ $Data->name}}</p>
            </td>
            <td>
 <p>{{ $Data->email}}</p>
            </td>

        </tr>
       </form>

    </tbody>
</table>
