<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management App | Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>
       <div class="container mt-4">

              <h1 class="text-center">Edit Student<a href="{{ route('student.index') }}" class="btn btn-success float-end">All Students</a></h1>

              <div>
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                      <div> {{ $error }} </div>
                    @endforeach
                </div>
                @endif
              </div>

              <form action="{{ route('student.update',$student->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row mt-4">
                    <div class="col-md-6">
                      <div class="mb-3">
                          <label>Stu Name</label>
                          <input type="text" name="stuname" value="{{ $student->stu_name }}" class="form-control"/>
                      </div>
                      <div class="mb-3">
                        <label>Stu Reg No</label>
                        <input type="text" name="sturegnum" value="{{ $student->stu_reg_no }}" class="form-control"/>
                      </div>
                      <div class="mb-3">
                        <label>Stu Address</label>
                        <input type="text" name="stuaddress" value="{{ $student->stu_address }}" class="form-control"/>
                      </div>
                      <div class="mb-3">
                        <label>Stu Age</label>
                        <input type="text" name="stuage" value="{{ $student->stu_age }}" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Stu Grade</label>
                            <select name="stugrade" class="form-control">
                                 <option>---choose grade---</option>
                                 <option value="1" {{$student->stu_grade == "1" ? "selected" : "" ;}}>Grade 1</option>
                                 <option value="2" {{$student->stu_grade == "2" ? "selected" : "" ;}}>Grade 2</option>
                                 <option value="3" {{$student->stu_grade == "3" ? "selected" : "" ;}}>Grade 3</option>
                                 <option value="4" {{$student->stu_grade == "4" ? "selected" : "" ;}}>Grade 4</option>
                                 <option value="5" {{$student->stu_grade == "5" ? "selected" : "" ;}}>Grade 5</option>
                                 <option value="6" {{$student->stu_grade == "6" ? "selected" : "" ;}}>Grade 6</option>
                                 <option value="7" {{$student->stu_grade == "7" ? "selected" : "" ;}}>Grade 7</option>
                                 <option value="8" {{$student->stu_grade == "8" ? "selected" : "" ;}}>Grade 8</option>
                                 <option value="9" {{$student->stu_grade == "9" ? "selected" : "" ;}}>Grade 9</option>
                                 <option value="10" {{$student->stu_grade == "10" ? "selected" : "" ;}}>Grade 10</option>
                                 <option value="11" {{$student->stu_grade == "11" ? "selected" : "" ;}}>Grade 11</option>
                                 <option value="12" {{$student->stu_grade == "12" ? "selected" : "" ;}}>Grade 12</option>
                                 <option value="13" {{$student->stu_grade == "13" ? "selected" : "" ;}}>Grade 13</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Stu Profile Picture</label>
                            <input type="file" name="stuimage" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label>Stu Gender</label><br/>
                            <input type="radio" value="Male" name="stugender" {{$student->stu_gender == "Male" ? "checked" : "" ;}}/>&nbsp Male &nbsp &nbsp
                            <input type="radio" value="Female" name="stugender" {{$student->stu_gender == "Female" ? "checked" : "" ;}}/>&nbsp Female
                        </div><br/>
                        <div class="mb-3">
                            <label>Stu Prefered Grade(A,B,C OR D)</label><br/><br/>
                            <input type="checkbox" name="stuprefgrade" value="A" {{$student->stu_prefered_grade == "A" ? "checked" : "" ;}}/>&nbsp Grade A &nbsp &nbsp
                            <input type="checkbox" name="stuprefgrade" value="B" {{$student->stu_prefered_grade == "B" ? "checked" : "" ;}}/>&nbsp Grade B &nbsp &nbsp
                            <input type="checkbox" name="stuprefgrade" value="C" {{$student->stu_prefered_grade == "C" ? "checked" : "" ;}}/>&nbsp Grade C &nbsp &nbsp
                            <input type="checkbox" name="stuprefgrade" value="D" {{$student->stu_prefered_grade == "D" ? "checked" : "" ;}}/>&nbsp Grade D &nbsp &nbsp
                        </div>
                    </div>
                  </div>
                  <input type="submit" value="Update" class="btn btn-success"/>
                  <input type="reset" value="Reset" class="btn btn-warning"/>
              </form>

       </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>