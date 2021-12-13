@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        @section('js')
            <script>
                Swal.fire(
                    'Oops!',
                    '{{$error}}',
                    'warning'
                )
            </script>            
        @endsection 
    @endforeach
@endif
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif