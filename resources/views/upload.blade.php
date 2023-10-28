<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin only</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/upload.css">
</head>

<body>
    <div class="container">
        <h1>Form Upload Gambar</h1>
        <form id="uploadForm" action="add" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="file">Pilih Gambar:</label>
            <input type="file" id="file" name="itemImg" accept="/image/*" required><br>

            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="itemText" required><br>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="itemDesc" id="itemDesc" rows="10" cols="80"></textarea>
            <br>

            <input type="submit" value="Save">
        </form>
    </div>
</body>
<script src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.editorConfig = function(config) {
        config.language = 'es';
        config.uiColor = '#F7B42C';
        config.height = 300;
        config.toolbarCanCollapse = true;

    };
    CKEDITOR.replace('itemDesc');
</script>

</html>