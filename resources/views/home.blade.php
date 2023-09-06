@extends('master')

@include('welcome')
<section class="" style="background-color: #eee;">
    <div class="container py-5 h-auto">

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10">

                <div class="card">
                    <div class="card-header p-3 d-flex justify-content-space-between">
                        <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task List</h5>
                        <a href="/completed" class="btn btn-success ms-auto">Completed</a>
                    </div>
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; ">

                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                    <tr class="fw-normal">
                                        <th>

                                            <span class="ms-2">{{ $item['name'] }}
                                        <td class="align-middle">
                                            <span>{{ $item['task'] }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <h6 class="mb-0">
                                                <span
                                                    class="badge bg-{{ $item['pri'] == 'High Priority' ? 'danger' : ($item['pri'] == 'Middle Priority' ? 'success' : 'warning') }}">
                                                    {{ $item['pri'] }}
                                                </span>
                                            </h6>

                                        </td>
                                        <td class="align-middle">
                                            <a href="/edit/{{ $item['id'] }}" data-mdb-toggle="tooltip"
                                                title="Edit"><i class="fas fa-pen pe-2"></i></a>
                                            <a href="/update-state/{{ $item->id }}" data-mdb-toggle="tooltip"
                                                title="Done"><i class="fas fa-check text-success me-3"></i></a>
                                            <a href="/delete/{{ $item['id'] }}" data-mdb-toggle="tooltip"
                                                title="Remove"><i class="fas fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="fw-normal">
                                        <td colspan="4" class="text-center">
                                            <h6 class="mb-0">
                                                No Tasks Available!
                                            </h6>
                                        </td>
                                    </tr>
                                    {{-- @endif --}}
                                @endforelse




                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer text-end p-3">

                        <button class="btn btn-primary"><a class="text-light" href="/addtask">AddTask</a></button>
                        <!-- <button class="btn btn-primary" ><a class="text-light">Add Task</a></button> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
