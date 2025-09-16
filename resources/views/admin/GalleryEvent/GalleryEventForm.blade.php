<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Event Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
 
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-card {
      background: #fff;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      animation: fadeInUp 0.8s ease;
      max-width: 600px;
      width: 100%;
    }

    @keyframes fadeInUp {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .form-floating label {
      color: #6c757d;
    }

    .btn-custom {
      background: #343B4A;
      border: none;
      color: #fff;
      font-weight: 600;
      transition: transform 0.2s;
    }

    .btn-custom:hover {
      transform: scale(1.05);
      background: #343B4A;
      color: white;
    }

    .image-preview {
      margin-top: 15px;
      border: 2px dashed #ddd;
      border-radius: 10px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      background: #f8f9fa;
    }

    .image-preview img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <div class="form-card">
    <h3 class="text-center mb-2">Create New Event</h3>
    <form id="eventForm" action="{{ url('events') }}" method="post" enctype="multipart/form-data">
        @csrf
      <!-- Event Name -->
      <div class="form-floating mb-2">
        <input type="text" class="form-control" id="event_name" name="event_name" placeholder="Event Name" required>
        <label for="event_name">Event Name</label>
      </div>

      <!-- Event Description -->
      <div class="form-floating mb-2">
        <textarea class="form-control" id="event_description" name="event_description" placeholder="Event Description" style="height: 120px" required></textarea>
        <label for="event_description">Event Description</label>
      </div>

      <!-- Event Date -->
      <div class="form-floating mb-2">
        <input type="date" class="form-control" id="event_date" name="event_date" required>
        <label for="event_date">Event Date</label>
      </div>

      <!-- Event Image -->
      <div class="mb-2">
        <label for="event_img" class="form-label">Event Image</label>
        <input class="form-control" type="file" id="event_img" name="event_img" accept="image/*" onchange="previewImage(event)">
        <div class="image-preview" id="imagePreview">
          <span class="text-muted">Image preview will appear here</span>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="d-grid">
        <button type="submit" class="btn btn-custom btn-lg">Create Event</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Preview image before upload
    function previewImage(event) {
      const preview = document.getElementById('imagePreview');
      preview.innerHTML = ""; // Clear old preview

      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement("img");
          img.src = e.target.result;
          preview.appendChild(img);
        }
        reader.readAsDataURL(file);
      } else {
        preview.innerHTML = '<span class="text-muted">Image preview will appear here</span>';
      }
    }

  
  </script>
</body>
</html>
