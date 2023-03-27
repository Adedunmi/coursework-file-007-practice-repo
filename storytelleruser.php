<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>The tourist websurf</title>
  </head>
  <body>
    <h1>Hello!</h1>
    <form>
    <div class="mb-3">
    <label for="exampleInputFirstName" class="form-label">Name</label>
    <input type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="Name">
    <div id="name" class="form-text">First name first</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1address" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email address">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputLocation" class="form-label">Dream destination</label>
    <input type="location" class="form-text" id="exampleInputLocation" name="Location">
  </div>
  <div class="mb-3">
    <label for="exampleInputStorytitle" class="form-label">Share experience and tips</label>
    <input type="shareexperienceandtips" class="form-text" id="exampleInputStoryTitle" name="Title">
  </div>
  <div class="mb-3">
    <label for="exampleInputStoryimports" class="form-label">Storyimports</label>
    <input type="storyimports" class="form-text form-number form-images" id="exampleInputStoryDescription" name="StoryDescription">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="form-check">
    <label class="form-check-label" for="exampleCheck1">Agree promotional emails</label>
  </div>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>
  </body>
</html>