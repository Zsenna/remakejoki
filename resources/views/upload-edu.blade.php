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
        <h1>Form Upload Training</h1>
        <form id="uploadForm" action="add2" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="itemText"><br>

            <label for="file">Gambar Header:</label>
            <input type="file" id="file" name="headImg" accept="/image/*"><br>

            <label for="file">Gambar Konten:</label>
            <input type="file" id="file" name="itemImg" accept="/image/*"><br>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="itemDesc" id="itemDesc" rows="10" cols="80"></textarea><br>

            <label for="storageLocation">Where would you store?</label><br>
            <input type="radio" id="training" name="itemTo" value="Training">
            <label for="training">Training</label><br>

            <input type="radio" id="companyProfile" name="itemTo" value="Company Profile">
            <label for="companyProfile">Company Profile</label><br>

            <input type="radio" id="mainPage" name="itemTo" value="Main Page">
            <label for="mainPage">Main Page</label><br>

            <input type="radio" id="production" name="itemTo" value="Production">
            <label for="production">Production</label><br>

            <input type="radio" id="highlight" name="itemTo" value="Highlight">
            <label for="highlight">Highlight</label><br>

            <input type="radio" id="workshop" name="itemTo" value="workshop">
            <label for="workshop">Workshop</label><br>

            <input type="radio" id="trackrecord" name="itemTo" value="Track Record">
            <label for="trackrecord">Track Record</label><br>

            <input type="radio" id="competition" name="itemTo" value="Competition">
            <label for="competition">Competition</label><br>

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
                            case "Training":
                                itemAbbrev = "training";
                                break;
                            case "Company Profile":
                                itemAbbrev = "comprofile";
                                break;
                            case "Main Page":
                                itemAbbrev = "mainp";
                                break;
                            case "Production":
                                itemAbbrev = "prod";
                                break;
                            case "Highlight":
                                itemAbbrev = "highl";
                                break;
                            case "Workshop":
                                itemAbbrev = "workshop";
                                break;
                            case "Track Record":
                                itemAbbrev = "trackrecord";
                                break;
                            case "Competition":
                                itemAbbrev = "competition";
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

</html>