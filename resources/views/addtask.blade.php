@extends('master')

@include('welcome')
<div class="container d-flex justify-content-center align-items-center h-100">
    <form class="w-50 m-auto " action="/addtask" method="POST">
        @csrf
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" id="form5Example1" name="name" class="form-control" />
            <label class="form-label" for="form5Example1">Name</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" name="task" id="form5Example2" class="form-control" />
            <label class="form-label" for="form5Example2">Task</label>
        </div>

        <div class="form-outline mb-4">
            <div class="btn-group">
                <input type="radio" class="btn-check" name="pri" id="option1" value="High Priority" />
                <label class="btn btn-secondary" for="option1">High Priority</label>

                <input type="radio" class="btn-check" name="pri" id="option2" value="Middle Priority" />
                <label class="btn btn-secondary" for="option2">Middle Priority</label>

                <input type="radio" class="btn-check" name="pri" id="option3" value="Low Priority" />
                <label class="btn btn-secondary" for="option3">Low Priority</label>
            </div>
        </div>

        <!-- Checkbox -->



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Add Task</button>
    </form>
</div>
