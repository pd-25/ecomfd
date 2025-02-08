@extends('admin.layout.main')
@section('title', 'All Contact | ')
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Contact</h5>

                    @if (Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!@empty($contactUs))
                                @forelse (@$contactUs as $index=>$conta)
                                    <tr>
                                        <th scope="row">{{ $index+1 }}</th>
                                        <td>{{ @$conta->first_name }}</td>
                                        <td>{{ @$conta->last_name }}</td>
                                        <td>{{ @$conta->email }}</td>
                                        <td>{{ @$conta->phone }}</td>
                                        <td>{{ @$conta->subject }}</td>
                                        <td>{{ @$conta->message }}</td>
                                        <td>{{ \Carbon\Carbon::parse($conta->created_at)->format('d-m-Y H:i:s') }}</td>
                                        <td class="text-center">
                                            <form method="POST" action="{{ route('contact.destroy', @$conta->id) }}" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" title="Delete">
                                                    <i class="ri-delete-bin-2-fill"></i> 
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No Record Found</td>
                                    </tr>
                                @endforelse
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
