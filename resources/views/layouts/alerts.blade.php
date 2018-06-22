@if (session('info'))
    <blockquote id="alert">
        <div class="row uniform">
            <div class="12u 12u$(xsmall)">
                <div class="alert alert-success">
                    <strong>{{ session('info') }}</strong>
                   <span id="btnAlert" style = "float: right; cursor: pointer;">&times;</span>
                </div>
            </div>
        </div>
    </blockquote>
@endif

@if(count($errors))            
    <div class="container">
        <blockquote id="alert">
            <div class="row uniform">
                <div class="alert alert-danger">
                    <span id="btnAlert" style = "float: right; cursor: pointer;">&times;</span>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </blockquote>
    </div>
@endif
@section('scripts')
    <script>
        window.addEventListener('load', function(){
             $('#btnAlert').click(function(event) {
                $('#alert').hide();
             });
        })
    </script>
@endsection