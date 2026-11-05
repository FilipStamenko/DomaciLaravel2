@extends ("layout")
@section("title")
Main page
@endsection
@section("contentPage")
<p>Time is {{date("h:i:s")}}</p>
@endsection
