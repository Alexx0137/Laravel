



@if(session('status'))
    <div class="alert alert-primary">
        {{--         role="alert">--}}
        {{ session('status') }}
        {{--        <button type="button"--}}
        {{--                class="close"--}}
        {{--                data-dismiss="alert"--}}
        {{--                aria-label="Close">--}}
        {{--            <span aria-hidden="true">&times;</span>--}}
        {{--        </button>--}}
    </div>
    {{ session('status') }}
@endif
