<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bucket Ball Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                Bucket Ball Task
            </a>
        </div>
    </nav>
    <div class="container mb-5">

        <div class="row mt-3">
            <div class="col-lg-6">
                <h5 class="text-center">Bucket</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Bucket</th>
                            <th scope="col">Size</th>
                            <th scope="col">Space left</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bucketData as $bucketList)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}.</th>
                                <td>{{ $bucketList['name'] }}</td>
                                <td>{{ $bucketList['size'] }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <h5 class="text-center">Ball</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ball</th>
                            <th scope="col">Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ballData as $ballList)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}.</th>
                                <td>{{ $ballList['name'] }}</td>
                                <td>{{ $ballList['size'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 p-5">
                <form method="post" action="{{ url('submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="pinkInput" class="form-label">Pink</label>
                        <input type="number" class="form-control" id="pinkInput" name="pink">
                    </div>
                    <div class="mb-3">
                        <label for="redInput" class="form-label">Red</label>
                        <input type="number" class="form-control" id="redInput" name="red">
                    </div>
                    <div class="mb-3">
                        <label for="blueInput" class="form-label">Blue</label>
                        <input type="number" class="form-control" id="blueInput" name="blue">
                    </div>
                    <div class="mb-3">
                        <label for="orangeInput" class="form-label">Orange</label>
                        <input type="number" class="form-control" id="orangeInput" name="orange">
                    </div>
                    <div class="mb-3">
                        <label for="greenInput" class="form-label">Green</label>
                        <input type="number" class="form-control" id="greenInput" name="green">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-6 p-5">
                <div class="card">
                    <h4 class="card-title text-center my-3">Results</h4>
                    <div class="card-body">
                        <pre>

                        @php
                            // if (isset($bucketData)) {
                            //     print_r($bucketData);
                            // }
                            // if (isset($ballData)) {
                            //     print_r($ballData);
                            // }
                            if (isset($data)) {
                                print_r($data);
                            }
                        @endphp
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
