@extends('chat.layout.app')

@section('contents')
<div class="row">
        <div class="col-md-12">
                <Chat :user="{{auth()->user()}}"></Chat>          
        </div>
</div>
      
@endsection
