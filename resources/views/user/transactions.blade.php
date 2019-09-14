@extends('layouts.back')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Messages:</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#profile" data-toggle="tab">
                                                <i class="material-icons">done_all</i> Successful
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#messages" data-toggle="tab">
                                                <i class="material-icons">sync_problem</i> Pending
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#settings" data-toggle="tab">
                                                <i class="material-icons">close</i> failed
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="tab-content">

                                <div class="tab-pane active" id="profile">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Country</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>Curaçao</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>$56,142</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                {{--                        ---second start --- --}}
                                <div class="tab-pane" id="messages">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Country</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>Curaçao</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>$56,142</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                                {{--                        ----third start-----}}


                                <div class="tab-pane" id="settings">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Country</th>
                                        <th>Action</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                            <td>
                                                <button class="btn btn-success btn-sm">
                                                    view
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>Curaçao</td>
                                            <td><button class="btn btn-success btn-sm">view</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>$56,142</td>
                                            <td>Netherlands</td>
                                            <td><button class="btn btn-success btn-sm">view</button></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                            <td><button class="btn btn-success btn-sm">view</button></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                            <td><button class="btn btn-success btn-sm">view</button></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                            <td><button class="btn btn-success btn-sm">view</button></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                            <td><button class="btn btn-success btn-sm">view</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---other--- -->
            </div>
        </div>
    </div>
    </div>
@endsection
