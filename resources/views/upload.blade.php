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
            <label for="judul">Nama Barang:</label>
            <input type="text" id="judul" name="itemText"><br>

            <label for="file">Gambar Konten:</label>
            <input type="file" id="file" name="itemImg" accept="/image/*" required><br>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="itemDesc" id="itemDesc" rows="10" cols="80"></textarea><br>

            <label for="spesifikasi">Spesifikasi:</label>
            <textarea name="itemSpec" id="itemSpec" rows="10" cols="80"></textarea><br>

            <label for="storageLocation">Where would you store?</label><br>
            <input type="radio" id="robot" name="itemTo" value="robot">
            <label for="robot">Robot</label><br>

            <input type="radio" id="AGV" name="itemTo" value="AGV">
            <label for="AGV">AGV</label><br>

            <input type="radio" id="plc" name="itemTo" value="plc">
            <label for="plc">plc</label><br>

            <input type="radio" id="nplc" name="itemTo" value="nplc">
            <label for="nplc">nplc</label><br>

            <input type="hidden" name="itemAbbrev" id="itemAbbrev" value="">

            <script>
                // Add an event listener to the form to set the itemAbbrev value before submission
                document.getElementById('uploadForm').addEventListener('submit', function(event) {
                    // Get the selected radio button
                    var selectedRadio = document.querySelector('input[name="itemTo"]:checked');
                    var itemAbbrev;

                    if (selectedRadio) {
                        // Abbreviate the value based on your requirements
                        switch (selectedRadio.value) {
                            case "Robot":
                                itemAbbrev = "robot";
                                break;
                            case "AGV":
                                itemAbbrev = "AGV";
                                break;
                            case "plc":
                                itemAbbrev = "plc";
                                break;
                            case "nplc":
                                itemAbbrev = "nplc";
                                break;
                            default:
                                itemAbbrev = selectedRadio.value;
                        }
                    }

                    document.getElementById('itemAbbrev').value = itemAbbrev;
                });
            </script>

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

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.editorConfig = function(config) {
        config.language = 'es';
        config.uiColor = '#F7B42C';
        config.height = 300;
        config.toolbarCanCollapse = true;

    };
    CKEDITOR.replace('itemSpec');
</script>

</html>