<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <!--  For single file upload  -->
        <input type="file" name="avatar" required/>
        <p class="help-block">{{ $errors->first('avatar') }}</p>
        
        <div class=" m-9">
        </div>

        <!--  For multiple file uploads  -->
        <input type="file" name="gallery[]" multiple required/>
        <p class="help-block">{{ $errors->first('gallery.*') }}</p>

            
    <div class=" m-9">
    </div>
    
        <button type="submit">Submit</button>
    </form>
    
    <script>
        // Set default FilePond options
        FilePond.setOptions({
            server: {
                url: "{{ config('filepond.server.url') }}",
                headers: {
                    'X-CSRF-TOKEN': "{{ @csrf_token() }}",
                }
            }
        });
    
        // Create the FilePond instance
        FilePond.create(document.querySelector('input[name="avatar"]'));
        FilePond.create(document.querySelector('input[name="gallery[]"]'), {chunkUploads: true});
    </script>
    
</body>
</html>