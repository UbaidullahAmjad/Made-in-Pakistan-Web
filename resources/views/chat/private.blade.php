@extends('chat.layout.app')

@section('content')
        <div class="row">
                <div class="col-md-12">
                        <private-chat :user="{{auth()->user()}}"></private-chat>
                </div>
        </div>
        
        
@endsection

