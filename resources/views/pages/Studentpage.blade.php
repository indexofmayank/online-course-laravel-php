@extends('app')

@section('content')
<div class="container">
    <button type="button" class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#AddStaticBackdrop">
        <i class="bi bi-person-fill-add"> Add student</i>
    </button>
    
    <h2 class="my-4"><b><u>Students Table</u></b></h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Class Teacher</th>
                    <th>Class</th>
                    <th>Fees</th>
                    <th>Admission on</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->student_name}}</td>
                        <td>{{ $student->teacher->teacher_name }}</td>
                        <td>{{ $student->class}}</td>
                        <td>{{$student->yearly_fees}}</td>
                        <td>{{$student->addmission_date}}</td>
                        <td>
                            <!-- Edit Action -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editStudentModal" id="editStudentButton"
                                data-id="{{ $student->id }}"
                                data-name="{{ $student->student_name }}"
                                data-teacher="{{ $student->teacher->id }}"
                                data-class="{{ $student->class }}"
                                data-date="{{ $student->addmission_date }}"
                                data-fees="{{ $student->yearly_fees }}">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="d-flex justify-content-between mt-3 py-3">
        @if($students->onFirstPage())
            <button class="btn btn-secondary" disabled>Previous</button>
        @else
            <a href="{{ $students->previousPageUrl() }}" class="btn btn-primary">Previous</a>
        @endif

        @if($students->hasMorePages())
            <a href="{{ $students->nextPageUrl() }}" class="btn btn-primary">Next</a>
        @else
            <button class="btn btn-secondary" disabled>Next</button>
        @endif
    </div>


    </div>
</div>

<!-- Add student modal -->
<div class="modal fade" id="AddStaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5" id="staticBackdropLabel">Add Student</div>
            </div>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="student_name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="student_name" name="student_name" placeholder='jhon doe' required>
                    </div>
                    <div class="mb-3">
                        <label for="class_teacher_id" class="form-label">Class Teacher</label>
                        <select class="form-select" id="class_teacher_id" name="class_teacher_id" required>
                            <option value="" selected disabled>Select Class Teacher</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <select class="form-select" id="class" name="class" required>
                            <option value="" selected disabled>Select Class</option>
                            @for($i = 1; $i <= 12; $i++)
                                <option value="{{$i}}">Class {{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="addmission_date" class="form-label">Admission Date</label>
                        <input type="date" class="form-control" id="addmission_date" name="addmission_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="yearly_fees" class="form-label">Yearly Fees</label>
                        <input type="number" class="form-control" id="yearly_fees" name="yearly_fees" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit student modal -->
<div class="modal fade" id="editStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editStudentModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5" id="editStudentModal">Edit Student</div>
            </div>
            <form id="editStudentForm" action="{{url('/studentupdate/' . $student->id) }}"  method="POST" >
                @csrf
                @method('PUT')
                <input type='hidden' id="edit_student_id" name="student_id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="student_name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="edit_student_name" name="student_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="class_teacher_id" class="form-label">Class Teacher</label>
                        <select class="form-select" id="edit_class_teacher_id" name="class_teacher_id" required>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <select class="form-select" id="edit_class" name="class" required>
                            @for($i = 1; $i <= 12; $i++)
                                <option value="{{$i}}">Class {{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="addmission_date" class="form-label">Admission Date</label>
                        <input type="date" class="form-control" id="edit_addmission_date" name="addmission_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="yearly_fees" class="form-label">Yearly Fees</label>
                        <input type="number" class="form-control" id="edit_yearly_fees" name="yearly_fees" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="submitEditFrom">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#editStudentModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var studentId = button.data('id');
        var studentName = button.data('name');
        var teacherId = button.data('teacher');
        var studentClass = button.data('class');
        var admissionDate = button.data('date');
        var fees = button.data('fees');

        $('#edit_student_name').val(studentName);
        $('#edit_class_teacher_id').val(teacherId);
        $('#edit_class').val(studentClass);
        $('#edit_addmission_date').val(admissionDate);
        $('#edit_yearly_fees').val(fees);
        $('#edit_student_id').val(studentId);
    });
</script>

@endsection
