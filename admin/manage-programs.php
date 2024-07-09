<html>
<head>
<title>Nintendo TVii::Admin</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="/css/admin.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<body>

<div class="wrapper">
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Nintendo TVii::Admin</a>
        </div>
      </div>
    </nav>

    <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#">Manage Programs</a></li>
        <li role="presentation"><a href="#">Manage Actors</a></li>
        <li role="presentation"><a href="#">Manage Users</a></li>
      </ul>

      <div class="nav-program-buttons">
      <input type="text" class="form-control" placeholder="Search programs..." aria-label="Search programs...">
      <button type="button" class="btn btn-primary create-program">Create program</button>
      </div>

      <table class="table table-bordered table-striped program-list">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Rating</th>
      <th scope="col">Genre</th>
      <th scope="col">Platforms</th>
      <th scope="col">Actors</th>
      <th scope="col">Country</th>
      <th scope="col">Year</th>
      <th scope="col">Attached URL</th>
      <th scope="col">Event End Date</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img class="program-preview-img" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7238583A12BC3EE570A6D8E240D67D0E6CACE9C782B434F7FFE09747512BDE0C/scale?width=1200&aspectRatio=1.78&format=webp"></td>
      <td>Family Guy</td>
      <td>TV-14</td>
      <td>Comedy</td>
      <td>Hulu/Star+</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img class="program-preview-img" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7238583A12BC3EE570A6D8E240D67D0E6CACE9C782B434F7FFE09747512BDE0C/scale?width=1200&aspectRatio=1.78&format=webp"></td>
      <td>Family Guy</td>
      <td>TV-14</td>
      <td>Comedy</td>
      <td>Hulu/Star+</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img class="program-preview-img" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7238583A12BC3EE570A6D8E240D67D0E6CACE9C782B434F7FFE09747512BDE0C/scale?width=1200&aspectRatio=1.78&format=webp"></td>
      <td>Family Guy</td>
      <td>TV-14</td>
      <td>Comedy</td>
      <td>Hulu/Star+</td>
    </tr>
  </tbody>
</table>

</div>

</body>

</html>