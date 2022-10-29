@extends('layouts.base')
@section('main')
    <section class="container p-3">
        <div class="row gy-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Placeholder Todo Name</h1>
                    </div>
                    <div class="card-body" style="min-height: 30rem;">
                        {{--TODOS--}}
                    </div>
                    <div class ="card-footer bg-transparent d-flex justify-content-end">
                        <button class="btn btn-outline-dark mx-1 px-3">
                            Edit
                        </button>
                        <button class="btn btn-dark mx-1 px-3">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
