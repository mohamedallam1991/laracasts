@extends('app')

@section('content')

    @if(count($people))

    <h1> People around Laravel</h1>
    @foreach($people as $person)
        <ul>
            <li>{{$person}}</li>
        </ul>

     @endforeach

     @else

        <h1> Your are laravel creator </h1>

    @endif


    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet, ex in porro quibusdam saepe veritatis?
        Aliquid aperiam delectus harum laborum maiores minus nihil nisi, officia quisquam recusandae rem suscipit?
    </p>



@stop