@extends('layouts.base')
@section('main')
    <section class="container p-3">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card" style="width:50rem;">
                <div class="card-body">
                    <form class="row gy-2">
                        <h1 class="text-center">
                            Edit Todo List
                        </h1>
                        <input name = "todo_id" type="hidden">
                        <div class="col-12 form-floating">
                            <input class="form-control" name = "todo_title" placeholder="...">
                            <label for = "todo_title" class="ms-2">
                                Todo Title
                            </label>
                        </div>

                        <div class="col-12 form-floating">
                            <textarea class="form-control" name = "todos" style="height:30rem;">
                            </textarea>
                            <label for = "todos" class="ms-2">
                                Todo List
                            </label>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-dark w-100">
                                Edit Todo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
