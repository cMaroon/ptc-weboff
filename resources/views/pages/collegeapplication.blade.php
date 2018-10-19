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
                            @if (session()->has('message_title'))
                            <center>
                                <div class="alert alert-success">
                                    {{ session('message_title') }}<p style="font-size:50px">{{ session('message_name')}}</p>{{ session('message_body_line1')}}
                                    <br><strong><h4 style="font-size:85px; margin:20px 0 0 0">{{ session('message_refno')}}</h4></strong>
                                    <br>{{ session('message_note')}}
                                    
                                </div>
                            </center>
                            @else
                            {!! Form::open(['action'=> 'AdmissionController@store','method'=>'POST'])!!}
                            

                            @include('includes.admission')
                                
                            {!! Form::close() !!}   
                            @endif
                      
                            {{-- @include('includes.successmessage') --}}
                      
                    
                       
                        </div>
                    </div>
                </div>
                

            </div>
        </main>
    </div>

    @include('includes.footer')

    
@endsection
