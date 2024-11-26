<style>
    nav .container-fluid {
        margin-right: 15em;
        margin-left: 15em;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid d-flex">
        <a class="navbar-brand" href="{{ route('index') }}">Simple Calculator with Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('plus') }}">Plus</a>
                <a class="nav-link" href="{{ route('minus') }}">Minus</a>
                <a class="nav-link" href="{{ route('multiply') }}">Multiply</a>
                <a class="nav-link" href="{{ route('divide') }}">Divide</a>
                <a class="nav-link" href="{{ route('user.index') }}">User</a>
            </div>
        </div>
    </div>
</nav>
