@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>All Data</h1>
@stop

@section('content')
    {{-- @dd($result) --}}
    <p>Welcome to this beautiful admin panel.</p>
    {{-- bootstrap4 datatable layout --}}
    @if ($result)
        <div class="card">
            <!-- /.card-header -->
            <di v class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>created at</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($result->data as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    <x-adminlte-button label="Danger" theme="danger" icon="fas fa-ban" />

                                </td>
                            </tr>

                        @empty
                            <p>No data found</p>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>created at</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                </table>
            </di>
            <!-- /.card-body -->
        </div>
        {{-- end bootstrap4 datatable layout --}}
    @else
        <div class="alert alert-danger" role="alert">
            <h5 class="alert-heading">Something error!</h4>
                {{ $result->message }}
        </div>
    @endif



@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
