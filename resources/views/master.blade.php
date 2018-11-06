<?php set_time_limit(0);?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.metadata')

    <title>
        @if (isset($title))
            {{ $title }}
        @elseif (isset($titlePrepend))
            {{ $currentSection . __(' · ') . $titlePrepend }}
        @endif
       
    </title>
</head>
<body >
    <div id="app">
       
        @include('includes.header')
        @include('includes.navigation')
        @yield('content')
        
        <button class="go-to-top go-to-top--image">{{-- to add image background: go-to-top--image --}}
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
    
    @yield('script')

    
<script src="{{ asset('js/app.js') }}"></script>
<script>
        $(document).ready(function(){
                $("input#checker").bind("click",function(o){
                    if($("input#checker:checked").length){
                        $("#per_add_st_num").val($("#add_st_num").val());
                        $("#per_add_st_name").val($("#add_st_name").val());
                        $("#per_add_subd").val($("#add_subd").val());
                        $("#per_add_brgy").val($("#add_brgy").val());
                        $("#per_add_city").val($("#add_city").val());
                        $("#per_add_province").val($("#add_province").val());
                        $("#per_add_zipcode").val($("#add_zipcode").val());
              
                    }else{
                      $("#per_add_st_num").val("");
                        $("#per_add_st_name").val("");
                        $("#per_add_subd").val("");
                        $("#per_add_brgy").val("");
                        $("#per_add_city").val("");
                        $("#per_add_province").val("");
                        $("#per_add_zipcode").val("");
                        
                    }
                });
            }
        );
        </script>
</body>
</html>
