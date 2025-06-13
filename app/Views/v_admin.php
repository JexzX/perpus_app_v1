<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Admin Perpustakaan TI</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
        color: #333;
    }

    .container {
        display: flex;
        min-height: 100vh;
    }

    .main-content {
        flex: 1;
        padding: 20px;
    }

    .page-header {
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
    }

    .page-title {
        font-size: 1.5rem;
        color: #2c3e50;
        margin: 0;
    }

    .breadcrumb {
        font-size: 0.9rem;
        color: #7f8c8d;
        margin-top: 5px;
    }

    .card {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card-header {
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
    }

    .card-header h3 {
        margin: 0;
        font-size: 1.2rem;
    }

    .card-header i {
        margin-right: 10px;
        color: #3498db;
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
    }

    .form-control {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-family: inherit;
        font-size: 1rem;
    }

    .form-control:focus {
        outline: none;
        border-color: #3498db;
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

    .btn {
        padding: 10px 20px;
        background: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        transition: background 0.3s;
    }

    .btn:hover {
        background: #2980b9;
    }

    .btn i {
        margin-right: 8px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-content">
            <div class="page-header">
                <ge class="page-title">Active Page</ge>
                <div class="breadcrumb">Admin Page / Active Page / Add New Book</div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="fas fa-book"></i>
                    <h3>Add Book Form</h3>
                </div>
                <div class="card-body">
                    <form id="addBookForm">
                        <div class="form-group">
                            <label for="judul">Book title</label>
                            <input type="text" id="judul" class="form-control" placeholder="Enter the book title"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Description</label>
                            <textarea id="deskripsi" class="form-control"
                                placeholder="Enter a book description"></textarea>
                        </div>

                        <button type="submit" class="btn">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('addBookForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Books added successfully!');
        // Untuk implementasi nyata, tambahkan AJAX request ke server di sini
        document.getElementById('addBookForm').reset();
    });
    </script>
</body>

</html>