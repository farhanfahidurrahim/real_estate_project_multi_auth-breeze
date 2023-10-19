@extends('backend.admin.dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Agent</li> --}}
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{ route('update.admin',$data->id) }}" class="forms-sample">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Admin Name</label>
                                <input type="text" name="name" value="{{ $data->name }}" class="form-control @error('name') is-invalid @enderror" id="exampleInputUsername1" autocomplete="off"
                                    placeholder="Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Admin Email</label>
                                <input type="email" name="email" value="{{ $data->email }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Admin Phone</label>
                                <input type="text" name="phone" value="{{ $data->phone }}" class="form-control @error('phone') is-invalid @enderror" id="exampleInputUsername1" autocomplete="off"
                                    placeholder="Phone">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Admin Address</label>
                                <input type="text" name="address" value="{{ $data->address }}" class="form-control @error('address') is-invalid @enderror" id="exampleInputUsername1" autocomplete="off"
                                    placeholder="Address">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Admin Role</label>
                                <select name="roles" class="form-select @error('roles') is-invalid @enderror">
                                    <option selected disabled>Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('roles')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Create Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" autocomplete="off"
                                    placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" autocomplete="off"
                                    placeholder="Retype Password">
                            </div> --}}
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                            <a href="{{ route('all.agent') }}" class="btn btn-secondary">All Agent</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
