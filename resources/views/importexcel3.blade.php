<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<div class="container">
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Excel File</h4>
                                        <span>Form for Import</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <form action="" method="post" class="j-pro" id="j-pro"></form>
                    <div class="j-wrapper">
                        <form method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" action="{{ url('/importexcel3/import') }}" enctype="multipart/form-data" novalidate="">
                            {{ csrf_field() }}
                            <div class="j-content">
                                <!-- start file -->
                                <div class="j-unit">
                                    <div class="j-input j-append-big-btn">
                                        <label class="j-icon-left" for="file_input">
                                        <i class="icofont icofont-download"></i>
                                    </label>
                                        <div class="j-file-button">
                                            Browse
                                            <input type="file"  name="select_file" onchange="document.getElementById('file_input').value = this.value;">
                                        </div>
                                        <input type="text" id="file_input" readonly="" placeholder="no file selected">
                                        <span class="j-hint">.xls, .xslx</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.content -->
                            <div class="j-footer">
                                <button type="submit"  name="upload" class="btn btn-primary">Upload</button>
                            </div>
                            <!-- end /.footer -->
                        </form>
                    </div>
                    <!-- Page-body end -->
                    @if(count($errors) > 0)
                    <div class="text-danger text-center"id="alert-error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- upload -->
                    @if($message = Session::get('success'))
                        <div class="text-success alert-block text-center">
                            <strong>{{ $message }}</strong>

                        </div>
                    @endif

                    <!-- insert -->
                    @if($message = Session::get('importInsert'))
                        <div class="text-success alert-block text-center">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <!-- update -->
                    @if($message = Session::get('importUpdate'))
                    <div class="text-success alert-block text-center">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <!-- code exit -->
                    @if($message = Session::get('codesExists'))
                        <div class="text-danger alert-block text-center">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <div class="card" style="border-top: 3px solid #404E67;">
                        <div class="card-header">
                            <h5>Import Data</h5>

                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="dom-jqry" class="table table-sm table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Stock Number</th>
                                            <th>Status</th>
                                            <th>Location</th>
                                            <th>Owner</th>
                                            <th>Serial #</th>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                        <tr role="row" class="odd">
                                            <td class="idUpdate">{{ $row->id}}</td>
                                            <td class="Stock Number">{{ $row->Stock}}</td>
                                            <td class="Status">{{ $row->St}}</td>
                                            <td class="Location">{{ $row->Loc}}</td>
                                            <td class="Owner">{{ $row->ManOrder }}</td>
                                            <td class="Serial #">{{ $row->Serial }}</td>




                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div><!-- Main-body end -->
            </div>
        </div>
    </div>
</div>


