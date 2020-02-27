@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
          <ul class="quick-links">
            <li><a href="#">ICE Market data</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Title Card</h4>
                <p class="card-description">Card Description</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Column #1</th>
                            <th>Column #2</th>
                            <th>Column #3</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. </td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                        </tr>
                        <tr>
                            <td>2. </td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection