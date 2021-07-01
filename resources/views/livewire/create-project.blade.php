<div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create a new project</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('project.store') }}">
                            @csrf
                            <div class=" row">
                                <div class="form-group col-6">
                                    <input type="text" class="form-control input-default " placeholder="Project Title">
                                </div>
                                <div class="form-group col-6">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="summernote"></div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
