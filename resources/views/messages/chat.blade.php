@extends('layout.app')

@section('contents')
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        @include('messages.shared.users')
      </div>
      <div class="col-md-9" style="overflow: scroll">
        <chat-component :auth-user="{{ auth()->user() }}" :other-user="{{ $otherUser }}"></chat-component>
        <!-- chat component will be rendered here -->
      </div>
    </div>
  </div>
@endsection