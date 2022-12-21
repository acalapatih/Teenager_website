<!DOCTYPE html>
<html>
    <head>
        <title>Create New Event</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <button class="back" onclick="window.location.href='../index.php'">
                Back
            </button>

            <p class="title">
                Create New Event
            </p>
            
            <form action="input-event-create.php" method="post">
                <div class="label">
                    Name
                </div>
                <input type="text" class="input" name="name">

                <div class="label">
                    Description
                </div>
                <textarea class="input" name="description"></textarea>

                <div class="label">
                    Date
                </div>
                <input type="date" class="input" name="date">

                <div class="label">
                    Time
                </div>
                <input type="time" class="input" name="time">

                <!-- <div class="label">
                    Status
                </div>
                <input type="checkbox" class="form-check-input" id="status" name="status" />
                <label class="form-check-label" for="status" name="status">Done</label>
                <input type="text" class="input" name="status"> -->

                <input type="submit" value="Create" name="submit" class="submit">
            </form>
        </div>
    </body>
</html>