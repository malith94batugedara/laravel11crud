<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management App | Add New Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>
       <div class="container mt-4">

              <h1 class="text-center">Add New Student</h1>

              <div>
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                      <div> {{ $error }} </div>
                    @endforeach
                </div>
                @endif
              </div>

              <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row mt-4">
                    <div class="col-md-6">
                      <div class="mb-3">
                          <label>Stu Name</label>
                          <input type="text" name="stuname" class="form-control"/>
                      </div>
                      <div class="mb-3">
                        <label>Stu Reg No</label>
                        <input type="text" name="sturegnum" class="form-control"/>
                      </div>
                      <div class="mb-3">
                        <label>Stu Address</label>
                        <input type="text" name="stuaddress" class="form-control"/>
                      </div>
                      <div class="mb-3">
                        <label>Stu Age</label>
                        <input type="text" name="stuage" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Stu Grade</label>
                            <select name="stugrade" class="form-control">
                                 <option>---choose grade---</option>
                                 <option>Grade 1</option>
                                 <option>Grade 2</option>
                                 <option>Grade 3</option>
                                 <option>Grade 4</option>
                                 <option>Grade 5</option>
                                 <option>Grade 6</option>
                                 <option>Grade 7</option>
                                 <option>Grade 8</option>
                                 <option>Grade 9</option>
                                 <option>Grade 10</option>
                                 <option>Grade 11</option>
                                 <option>Grade 12</option>
                                 <option>Grade 13</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Stu Profile Picture</label>
                            <input type="file" name="stuimage" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label>Stu Gender</label><br/>
                            <input type="radio" value="Male" name="stugender"/>&nbsp Male &nbsp &nbsp
                            <input type="radio" value="Female" name="stugender"/>&nbsp Female
                        </div><br/>
                        <div class="mb-3">
                            <label>Stu Prefered Grade(A,B,C OR D)</label><br/><br/>
                            <input type="checkbox" name="stuprefgrade" value="A"/>&nbsp Grade A &nbsp &nbsp
                            <input type="checkbox" name="stuprefgrade" value="B"/>&nbsp Grade B &nbsp &nbsp
                            <input type="checkbox" name="stuprefgrade" value="C"/>&nbsp Grade C &nbsp &nbsp
                            <input type="checkbox" name="stuprefgrade" value="D"/>&nbsp Grade D &nbsp &nbsp
                        </div>
                    </div>
                  </div>
                  <input type="submit" value="Save" class="btn btn-success"/>
                  <input type="reset" value="Reset" class="btn btn-warning"/>
              </form>

       </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>