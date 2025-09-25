<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <div class="container-fluid">
        <h1> Users Data </h1>
        <div class="card">
            <div class="card-body">
                @include('flash_data')
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <td> #</td>
                        <td> Id </td>
                        <td> Name </td>
                        <td> Email </td>
                        <td> Designation </td>
                        <td> Contact </td>
                        <td> Created At </td>
                        <td> Updated At </td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $user->id }} </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->designation }} </td>
                            <td> {{ $user->contact }} </td>
                            <td> {{ $user->created_at }} </td>
                            <td> {{ $user->updated_at }} </td>
                        </tr>
                    @empty
                        <tr>
                            <td> No data available.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
