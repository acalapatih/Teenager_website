<!DOCTYPE html>
<html>
    <head>
        <title>Create New Event</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="../assets/teenager-icon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <button class="back" onclick="window.location.href='event.php'">
                Back
            </button>

            <p class="title">
                Create New Event
            </p>
            
            <form action="input-event-create.php" method="post">
                <div class="label">
                    Name
                </div>
                <input type="text" class="input" name="name" required>

                <div class="label">
                    Description
                </div>
                <textarea class="input" name="description" required></textarea>

                <div class="label">
                    Date
                </div>
                <input type="date" class="input" name="date" id="deadline_title" required>

                <div class="label">
                    Time
                </div>
                <input type="time" class="input" name="time" required>

                <!-- <div class="label">
                    Status
                </div>
                <input type="checkbox" class="form-check-input" id="status" name="status" />
                <label class="form-check-label" for="status" name="status">Done</label>
                <input type="text" class="input" name="status"> -->

                <input type="submit" value="Create" name="submit" class="submit">
            </form>
        </div>

        <script>
            $(function(){
                var dtToday = new Date();
                
                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if(month < 10)
                    month = '0' + month.toString();
                if(day < 10)
                    day = '0' + day.toString();
                
                var maxDate = year + '-' + month + '-' + day;

                // or instead:
                // var maxDate = dtToday.toISOString().substr(0, 10);

                $('#deadline_title').attr('min', maxDate);
            });
        </script>
    </body>
</html>