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
                                    <span class="nav-tabs-title">Top Up Account --&raquo;</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">

                                        <li class="nav-item">
                                            <a class="nav-link active" href="#" data-toggle="tab">
                                                <i class="material-icons">sync_problem</i> Top Up
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
                                        <th>Amount</th>
                                        <th>Credit</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>$36,738</td>
                                            <td>40,000</td>
                                            <td>
                                                <button class="btn-success">
                                                    Successful
                                                </button>
                                            </td>
                                            <td>Today</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>$36,738</td>
                                            <td>40,000</td>
                                            <td>
                                                <button class="btn-danger">
                                                    Failed
                                                </button>
                                            </td>
                                            <td>Today</td>
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

                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---other--- -->
            </div>
        </div>
    </div>
@endsection
