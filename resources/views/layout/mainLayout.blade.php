<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<!-- Grey with black text -->

<!-- Blue background with white text -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
<ul class="navbar-nav">
<li class="nav-item">
        <a class="nav-link active" href="/home">Home</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="/student">Student</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="/class">Class</a>
</li>
<li class="nav-item">
        <a class="nav-link" href="/biodata">Biodata</a>
</li>
<li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
</li>
    </ul>
</nav>
<div class="container">
@yield('content')

</div>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>



