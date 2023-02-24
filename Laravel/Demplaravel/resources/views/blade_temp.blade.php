<h1>Hi i am myview page </h1>
<?php
echo  "<h1>Hi hello</h1>"  
?>

<h1>{{'hi how are you'}}</h1>

{{--Comment in laravel by blade templating--}} 

<h1>{{10+10}}</h1>

@php
$a=20;
echo $a;
@endphp


{{--
Blade Conditional Directives
@php @endphp
@if , @elseif ,@else and @endif  
@unless , @endunless // inverse of if / opposite of if 
@isset @endisset  
--}}

@php $name="nagar" @endphp
@if($name=="Raj")
<h1>Hi my name is {{$name}}</h1>
@elseif($name=="Mahesh")
<h1>Hi my name is {{$name}}</h1>
@else
<h1>Unknown</h1>	
@endif


{{--

Blade Looping Directives

@for and @endfor
@while and @endwhile
@foreach and @endforeach
@break @continue

--}}

@for($i=1;$i<=10;$i++)
<h4>{{$i}}</h4>	
@endfor


@php $data=['sam','raj','mahesh'];@endphp

@foreach($data as $d)
<h4>{{$d}}</h4>
@endforeach

@if(!empty($data))
	@foreach($data as $d)
	<h4>{{$d}}</h4>
	@endforeach
@endif	




{{--

Layout Blade Directives

@yield directive is used to display the content of a given section
@section and @endsection   directives define a section of content
@include()
@extends blade directives specify which layout the child view should “inherit”

@stack  render the complete stack content , pass the name of the stake
@push and @endpush  is used to push the stack

--}}