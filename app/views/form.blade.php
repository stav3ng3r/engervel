@extends('layouts.base')

@section('body')
   <form action="{{ url('/') }}" method="POST">

       <input type="hidden" name="foo" value="bar" />
       <input type="hidden" name="baz" value="boo" />

       <input type="submit" value="Send" />

   </form>
@stop
