<x-app-layout>

    <x-slot:title>
        Patient
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient
                        <a href="{{ url('patients/create')}}" class="btn btn-primary float-right">Add Patient</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        {{-- {{ $patients }} --}}

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Contact Number</th>
                                    <th>Address</th>
                                    <th>Dental History</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->age}}</td>
                                        <td>{{ $item->contactNumber}}</td>
                                        <td>{{ $item->address}}</td>
                                        <td>{{ $item->dentalHistory}}</td>
                                            <td>
                                            <a href="">Edit</a>
                                            <a href="">Delete</a>
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
</x-app-layout>