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

                        <form method="POST" action="{{ route('store.role.permission') }}" class="forms-sample">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Role</label>
                                <select name="role_id" class="form-select">
                                    <option selected disabled>Select Role</option>
                                    @foreach ($roles as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="checkDefaultMain">
                                <label class="form-check-label" for="checkDefaultMain">Permission All</label>
                            </div>
                            <div>
                                @error('permission')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>

                            @foreach ($permissionGroupNames as $group)
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input name="" type="checkbox" class="form-check-input"
                                                id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                {{ $group->group_name }}
                                            </label>
                                    </div>
                                    </div>
                                    <div class="col-3">
                                        @php
                                            $permissionName = DB::table('permissions')
                                                ->select('name', 'id')
                                                ->where('group_name', $group->group_name)
                                                ->get();
                                        @endphp
                                        @foreach ($permissionName as $row)
                                            <div class="form-check mb-3">
                                                <input name="permission[]" id="checkDefault{{ $row->id }}"
                                                    value="{{ $row->id }}" type="checkbox" class="form-check-input">
                                                <label class="form-check-label" for="checkDefault{{ $row->id }}">
                                                    {{ $row->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('script')
    {{-- Permission All Check --}}
    <script>
        $('#checkDefaultMain').click(function() {
            if ($(this).is(':checked')) {
                $('input[type = checkbox]').prop('checked', true);
            } else {
                $('input[type = checkbox]').prop('checked', false);
            }
        })
    </script>
@endsection
@endsection
