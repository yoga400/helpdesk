@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-end">
                <a href="{{ Route('ticket.index') }}" class="btn btn-primary mb-3 text-left">Back</a>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Create Tickets') }}</div>

                <div class="card-body">
                    <form action="">
                        @csrf
                        <input type="hidden" name="assign_to">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
