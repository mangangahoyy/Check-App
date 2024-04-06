<x-app-layout>

    <x-slot:title>
        Add Patient
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">


                 @if (@session('status'))
                    
                <div class="alert alert-success">{{ session('status')}}</div>
                    
                @endif



                <div class="card">
                    <div class="card-header">
                        <h4>Patient
                        <a href="{{ url('patients')}}" class="btn btn-primary float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{url ('patients/create')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @error('name') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" value="{{ old('age') }}">
                            @error('age') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Contact Number</label>
                            <input type="text" name="contactNumber" class="form-control" value="{{ old('name') }}">
                            @error('contactNumber') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <textarea type="description" name="address" class="form-control" rows="2" value="{{ old('name') }}"></textarea>
                            @error('address') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Dental History</label>
                            <textarea type="description" name="dentalHistory" class="form-control" rows="3" value="{{ old('name') }}"></textarea>
                            @error('dentalHistory') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>