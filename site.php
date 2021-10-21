<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simonas</title>
  </head>
  <body>

    <h1 id=formName>Simple web contact form</h1>
    <form target="_blank" action="post.php" method="post">
      <div class="baseform">
        <h2 class="form" id="name">User's name:</h2>
        <input class="form" id="name" type="text" name="name">
      </div>
      <div class="baseform">
        <h2 class="form" id="email">Email:</h2>
        <input class="form" id="email" type="email" name="email">
      </div>
      <div class="baseform">
      <h2 class="form" id="issue">Issue:</h2>
        <select class="form" id="issue" name="issue">
          <option value=" "> </option>
          <option value="query">Query</option>
          <option value="feedback">Feedback</option>
          <option value="complaint">Complaint</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="baseform">
        <h2 class="form" id="comment">Comment:</h2>
        <input class=form id="comment" type="text" name="comment" style="height: 100px; width: 250px;">
      </div>
      <div class="baseform">
        <input class="form" id="button" type="submit">
      <div>
    </form>

  </body>
</html>
