
@extends('layout.dashboard')
@section('content')


  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Welcome, admin</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">

    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('create')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('expenses')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-shopping-cart">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                Expenses
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">All Expenses</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                  <a href="create_product.html" class="btn btn-outline-secondary">Add New Expenses</a>
              </div>
      </div>
      </div>
      <div class="btn-toolbar mb-2 mb-md-0">
          <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Item</th>
                    <th>Item Category</th>
                    <th>Purchase Date</th>
                    <th>Amount</th>
                    <th width="280px">Actions</th>
                </tr>
                <tr>
                    <td>Dell Laptop</td>
                    <td>Hardware</td>
                    <td>5 Jan 2019</td>
                    <td>100 $</td>
                    <td>
                      <a class="btn btn-info" href="">Edit</a>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                  <td>MS OFFICE 2022</td>
                  <td>Material</td>
                  <td>5 Jan 2018</td>
                  <td>125 $</td>
                  <td>
                    <a class="btn btn-info" href="">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </td>
              </tr>
              <tr>
                <td>HP Laptop</td>
                <td>Hardware</td>
                <td>5 Jan 2018</td>
                <td>250 $</td>
                <td>
                  <a class="btn btn-info" href="">Edit</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
          </table>
      </div>
      </main>
    </div>
  </div>

  

  <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/jquery-3.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/bootstrap.js"
    integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
    crossorigin="anonymous"></script>
  <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/feather.js"></script>
  <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/Chart.js"></script>
  <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/dashboard.js"></script>
  <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/jquery-3.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/bootstrap.js"
  integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
  crossorigin="anonymous"></script>
<script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/feather.js"></script>
<script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/Chart.js"></script>
<script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/dashboard.js"></script>

@endsection

