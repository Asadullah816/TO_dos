@extends('master')

@include('welcome')
<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-auto">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10">

                <div class="card">
                    <div class="card-header p-3">
                        <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Completed Tasks</h5>
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
                                            <span class="badge bg-success">Completed</span>
                                            <a href="/deleteCompleted/{{ $item['id'] }}" data-mdb-toggle="tooltip"
                                                title="Remove"><i class="fas fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="fw-normal">
                                        <td colspan="4" class="text-center">
                                            <h6 class="mb-0">
                                                No Completed Tasks Available!
                                            </h6>
                                        </td>
                                    </tr>
                                @endforelse




                            </tbody>
                        </table>

                    </div>
                    <a href="/home" class="btn btn-danger m-auto mb-3">Back</a>
                </div>

            </div>

        </div>
    </div>
</section>
