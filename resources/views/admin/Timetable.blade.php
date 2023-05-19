<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130782039-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130782039-2');
    </script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> TimeTable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('admin_dashboard/assets/css/main.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" href="favicon.png" sizes="24x24" type="image/png">

</head>
<body>
@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



<div id="container">
        <span id="title"> Time Table</span>
        <div id="input-container">
        <div class="col-12 col-sm-6">
            <div class="input-box">
                <label>Course title:</label>
                <input type="text" id="course-title" />
            </div>
            <div class="input-box">
                <label>Classroom:</label>
                <input type="text" id="classroom" />
            </div>
            <div class="input-box">
                <label>Section and/or teacher:</label>
                <input type="text" id="section" />
            </div>
            <div class="input-box">
                <label>Select days:</label>
                <select id="days" name="days[]" multiple="multiple">
                    <option value="1">Saturday</option>
                    <option value="2">Sunday</option>
                    <option value="3">Monday</option>
                    <option value="4">Tuesday</option>
                    <option value="5">Wednesday</option>
                    <option value="6">Thursday</option>
                    <option value="7">Friday</option>
                </select>
            </div>
            <div class="input-box">
                <label>Select hours:</label>
                <select id="hours" name="hours[]" multiple="multiple">
                    <option value="1">1: 8:00 - 9:30</option>
                    <option value="2">2: 9:30 - 11:00</option>
                    <option value="3">3: 11:00 - 12:30</option>
                    <option value="4">4: 12:30 - 14:00</option>
                    <option value="5">5: 14:00 - 15:30</option>
                    <option value="6">6: 15:30 - 17:00</option>
                </select>
            </div>
            <div id="buttons">
                <button id="add-btn">Add</button>
                <button id="undo-btn">Undo</button>
            </div>
        </div>
        <span><i>Click on the cell to delete the added course</i></span>
        <br>
        <div id="timetable">

        </div>
        <div id="error">

        </div>
    </div>
    <div id="desktopView">
        Please view on desktop.
    </div>
    <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{ URL::asset('admin_dashboard/assets/js/main.js') }}"></script>
</html>
