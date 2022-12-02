@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="card-content">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S#</th>
                                    <th>Email</th>
                                    <th>Subscribed On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($emails as $email)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $email->email }}</td>
                                    <td>{{ $email->created_at }}</td>
                                    <td>
                                        <form action="{{ route('superadmin.newsletter.destroy', $email->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger"><i class="ft-trash"></i></button>
                                        </form>
                                    </td>
                                    
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection