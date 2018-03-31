<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>uploadfile test</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="UploadFileTest.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>单文件上传</label>
                <input type="file" name="upload">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <hr>
        <form action="UploadFileTest.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>多文件上传</label>
                <input type="file" name="upload[]">
                <input type="file" name="upload[]">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
