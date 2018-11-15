<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Course data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h3>Course List From API </h3>
             <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Course Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course )
                        <tr>
                            <td>{{ $course['course_id'] }}</td>
                            <td>{{ $course['course_name'] }}</td>
                            <td>{{ $course['course_type'] }}</td>
                            <td>
                                <button data-course-id="{{ $course['course_id'] }}" data-course-name="{{ $course['course_name'] }}" data-course-type="{{ $course['course_type'] }}" class="btn btn-primary save_btn">Save</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $courses->render(); ?>


        </div>
    </body>
</html>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('button.save_btn').on('click',function(){
            var course_id = $(this).data('course-id');
            var course_type = $(this).data('course-type');
            var course_name = $(this).data('course-name');
            $.ajax({
              url: "{{ url('coursesave') }}",//http://localhost/mylaravel/public/index.php/coursesave
              method:'POST',
              dataType:'JSON',
              data:{'course_id':course_id,'course_type':course_type,'course_name':course_name},
              success: function(html){
                alert(html.message);
              }
            });
        });
      
  });
</script>
