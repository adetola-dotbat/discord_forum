@extends('administrator.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Community</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Community</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-4">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            @if (session()->has('success'))
                                {{-- <p> {{ session()->get('success') }}</p> --}}
                                <div class="mt-4 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                    role="alert">
                                    <span class="font-medium">Success alert! </span>{{ session()->get('success') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                {{-- <p> {{ session()->get('success') }}</p> --}}
                                <div class="mt-4 p-4 mb-4 text-sm text-red-800 rounded-lg bg-green-50 dark:bg-red-800 dark:text-red-400"
                                    role="alert">
                                    <span class="font-medium">Error alert! </span>{{ session()->get('error') }}
                                </div>
                            @endif
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('store.community') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="card-body">

                                <!-- select -->
                                <div class="form-group">
                                    <label>Users</label>
                                    <select class="form-control" name="user_id">
                                        <option>Select</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Community Name</label>
                                    <input type="text" name="title" class="form-control" placeholder="Community name">
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Community Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>User</th>
                                        <th>Communit</th>
                                        <th style="width: 40px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($communities as $community)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $community->user->name }}</td>
                                            <td>
                                                {{ $community->title }}
                                            </td>
                                            <td><a href="{{ route('delete.community', $community->id) }}"
                                                    class="btn bg-danger">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
