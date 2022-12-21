<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Add Assignment</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="input-assignment-style.css">
	</head>
	<body>
    <div class="container mt-5 mb-3">
      <div class="d-gip gap-2 col-6 mx-auto">
        <button type="button" class="btn-back btn" onclick="window.location.href='../assignment/assignment.php'">Back</button>
      </div>
    </div>
		<div class="container">
			<div class="card w-50 mx-auto">
				<div class="card-header">
					<h5 class="card-title">Add Assignment</h5>
				</div>
				<div class="card-body">
					<form action="prosesInput_assignment.php" method="post">
						<div class="mb-3">
							<label for="subject_title" class="form-label" name="subject_title"">Subject</label>
							<input name="subject" type="text" class="form-control" id="subject_title" placeholder="What Is The Subject..."/>
						</div>
						<div class="mb-3">
							<label for="description" class="form-label">Assignment Description</label>
							<textarea class="form-control" name="description" id="assignment_title" cols="30" rows="10" placeholder="Leave some descriptions for the assignment."></textarea>
						</div>
                        <div class="mb-3">
							<label for="deadline_title" class="form-label" name="deadline_title"">Assignment Deadline</label>
							<input type="date" name="date" class="form-control" id="deadline_title"/>
						</div>
						<!-- <div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="done" name="done" />
							<label class="form-check-label" for="done" name="done">Done</label>
						</div> -->
						<button type="submit" class="btn-submit btn">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
			crossorigin="anonymous"
		></script>
	</body>
</html>
