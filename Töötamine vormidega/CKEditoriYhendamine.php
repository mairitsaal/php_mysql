<!DOCTYPE html>
<html>
<head>
    <title>WYSIWYG</title>
    <style type="text/css">
        #sisu{
            width: 700px;
        }
    </style>
    <script src="ckeditor/ckeditor/ckeditor.js"></script>
</head>
<body>
<div id="sisu">
    <h1>Artikli lisamine</h1>

    <form action="" method="post">
			<textarea class="ckeditor" cols="20" name="uudis" id="uudis" rows="10">
			</textarea>
        <script>
            CKEDITOR.replace( 'uudis', {
                uiColor: '#ffccff',
                language: 'et',
                toolbar: [
                    ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', 'Format', 'Image']
                ]
            });
        </script>
        <br>
        <input type="submit" value="Salvesta">
    </form>
</div>
</body>
</html>
