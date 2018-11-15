<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Course List</title>

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
            <h3>Courses Saved</h3>
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
                        @foreach($course_list as $row )
                        <tr>
                            <td>{{ $row->course_id }}</td>
                            <td>{{ $row->course_name }}</td>
                            <td>{{ $row->course_type }}</td>
                            <td>
                                <button class="btn btn-primary">Save</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $course_list->render(); ?>


        </div>
    </body>
</html>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
   // alert('a');
  });
</script>
