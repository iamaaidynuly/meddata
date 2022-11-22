<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div>

<li class="nav-item">
    <a href="{{route('home')}}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Main page</p>
    </a>
    <a href="{{route('user-roles.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-users"></i>
        <p>Roles</p>
    </a>
    <a href="{{route('countries.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-city"></i>
        <p>Countries</p>
    </a>
    <a href="{{route('doctors.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-users"></i>
        <p>Doctors</p>
    </a>
    <a href="{{route('managers.index')}}" class="nav-link active">
        <i class="nav-icon fas fa-users"></i>
        <p>Managers</p>
    </a>
    {{--    <a href="" class="nav-link active">--}}
    {{--        <i class="nav-icon fas fa-city"></i>--}}
    {{--        <p>Медицинские учреждения</p>--}}
    {{--    </a>--}}
    {{--    <form method="get" action="{{route('users.index')}}">--}}
    {{--        @csrf--}}
    {{--        <input type="hidden" value="2" name="type">--}}
    {{--        <button class="nav-link" type="submit">--}}
    {{--            <i class="nav-icon fas fa-users"></i>--}}
    {{--            Doctors--}}
    {{--        </button>--}}
    {{--    </form>--}}
    {{--    <form method="get" action="{{route('users.index')}}">--}}
    {{--        @csrf--}}
    {{--        <input type="hidden" value="3" name="type">--}}
    {{--        <button class="nav-link" type="submit">--}}
    {{--            <i class="nav-icon fas fa-users"></i>--}}
    {{--            Managers--}}
    {{--        </button>--}}
    {{--    </form>--}}
</li>
