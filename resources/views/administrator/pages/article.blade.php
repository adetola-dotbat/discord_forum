@extends('administrator.layout.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Article</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Article</li>
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
                        <form action="{{ route('store.article') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" rows="9" name="content" placeholder="Enter ..."></textarea>
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
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th style="width: 40px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $article->title }}</td>
                                            <td>
                                                {{ $article->content }}
                                            </td>
                                            <td><a href="{{ route('delete.article', $article->id) }}"
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
