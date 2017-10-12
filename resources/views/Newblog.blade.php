<html>
    <head>
        <title>Create new blog</title>
        <!-- <script src="../ckeditor.js"></script> -->

<script src="{{ asset('../ckeditor/ckeditor.js') }}"></script>
    </head>
<body>

<form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
             Start creating your blog content here.....
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>



</body>
</html>