@extends('master', ['title' => 'Admission'])

@section('content')
    
    <div class="wrapper mb-4 mt-4">
        <main class="ptc-page">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ptc-card">
                        <div class="ptc-card__header">
                            <h1 class="ptc-card__header-title">College Online Registration</h1>
                            
                        </div>
                        <div class="ptc-card__body">
                        {!! Form::open(['action'=> 'AdmissionController@store','method'=>'POST'])!!}
                            @include('includes.admission')
                        {!! Form::close() !!}   
                        </div>
                    </div>
                </div>
                

            </div>
        </main>
    </div>

    @include('includes.footer')

    
@endsection
