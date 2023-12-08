<!DOCTYPE html>
<html>
<head>
  <title>Student Information Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Student Information Form</h2>
    <form id="studentForm" action="submit.php" method="post" enctype="multipart/form-data">
      <h3>Personal Information</h3>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="placeOfBirth">Place of Birth:</label>
        <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" required>
      </div>
      <div class="form-group">
        <label for="dateOfBirth">Date of Birth:</label>
        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="sex">Sex:</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="male" value="Male" required>
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="female" value="Female" required>
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>
      <div class="form-group">
        <label for="telephone">Telephone:</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="profileImage">Profile Image:</label>
        <input type="file" class="form-control-file" id="profileImage" name="profileImage" accept="image/*" required>
      </div>

      <h3>Parent Information</h3>
      <div class="form-group">
        <label for="parentName">Parent Name:</label>
        <input type="text" class="form-control" id="parentName" name="parentName" required>
      </div>
      <div class="form-group">
        <label for="parentTelephone">Parent Telephone:</label>
        <input type="tel" class="form-control" id="parentTelephone" name="parentTelephone" required>
      </div>
      <div class="form-group">
        <label for="relationship">Relationship:</label>
        <input type="text" class="form-control" id="relationship" name="relationship" required>
      </div>

      <h3>Academic Information</h3>
      <div class="form-group">
        <label for="studentId">Student ID:</label>
        <input type="text" class="form-control" id="studentId" name="studentId" required>
      </div>
      <div class="form-group">
        <label for="faculty">Faculty:</label>
        <input type="text" class="form-control" id="faculty" name="faculty" required>
      </div>
      <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" class="form-control" id="department" name="department" required>
      </div>
      <div class="form-group">
        <label for="class">Class:</label>
        <input type="text" class="form-control" id="class" name="class" required>
      </div>
      <div class="form-group">
        <label for="registrationDate">Registration Date:</label>
        <input type="date" class="form-control" id="registrationDate" name="registrationDate" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script>
    // Form validation using JavaScript
    document.getElementById('studentForm').addEventListener('submit', function (event) {
      // Validate name field (only letters and spaces)
      const nameInput = document.getElementById('name');
      if (!/^[a-zA-Z\s]+$/.test(nameInput.value)) {
        event.preventDefault();
        alert('Name field should only contain letters and spaces');
        nameInput.focus();
        return false;
      }

      // Validate email format
      const emailInput = document.getElementById('email');
      if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(emailInput.value)) {
        event.preventDefault();
        alert('Invalid email format');
        emailInput.focus();
        return false;
      }

      // Validate profile image file type (accepts only image formats)
      const profileImageInput = document.getElementById('profileImage');
      const file = profileImageInput.files[0];
      const fileType = file.type;
      const validImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
      if (!validImageTypes.includes(fileType)) {
        event.preventDefault();
        alert('Invalid file type for profile image. Please upload an image file.');
        profileImageInput.value = '';
        return false;
      }
    });
  </script>
</body>
</html>