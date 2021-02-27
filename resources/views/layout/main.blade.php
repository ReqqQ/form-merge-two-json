@extends('layout.header')
<body>
<div class="container">
<div class="row mt-5">
    <div class="col text-center" style="padding:50px 0">
        <div class="logo">Generator Form</div>
        <div class="login-form-1">
            <form id="login-form" class="text-left" enctype="multipart/form-data" method="POST" action="{{ route('generator.store') }}">
                <div class="login-form-main-message"></div>
                <div class="main-login-form mb-1">
                    <div class="login-group">
                        <div class="form-group pt-3 pb-3">
                            <label for="exampleFormControlFile1">Input tree json file</label>
                            <input type="file" name="treeJson" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group pt-3 pb-3">
                            <label for="exampleFormControlFile1">Input list json file</label>
                            <input type="file" name="listJson" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-chevron-right"></i> Merge Jsons</button>
                </div>
            </form>
        </div>
        <!-- end:Main Form -->
    </div>
</div>
</div>
</body>
</html>
