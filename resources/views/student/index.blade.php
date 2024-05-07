<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management App | All Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>
     
     <div class="container mt-4">

          <h1 class="text-center">All Students</h1><br/>
          @if(session('status'))
          <div class="alert alert-success">
                {{ session('status') }}
          </div>
          @endif
            <table class="table table-dark table-bordered">
                 <thead>
                      <tr>
                        <th>Stu Name</th>
                        <th>Stu Reg No</th>
                        <th>Stu Address</th>
                        <th>Stu Grade</th>
                        <th>Stu Image</th>
                        <th>Stu Gender</th>
                        <th>Action</th>
                      </tr>
                 </thead>
                 <tbody>
                    @foreach ($students as $student)
                       <tr>
                        <td>{{$student->stu_name}}</td>
                        <td>{{$student->stu_reg_no}}</td>
                        <td>{{$student->stu_address}}</td>
                        <td>{{$student->stu_grade}}</td>
                        <td><img src="{{ asset('uploads/students/'.$student->stu_image)}}" height="50px" width="50px" alt="alt"/></td>
                        <td>{{$student->stu_gender}}</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                       </tr>
                    @endforeach
                 </tbody>
            </table>

     </div>
    
</body>
</html>