@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Customers') }}</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Code</th>
                            <th>Forenames</th>
                            <th>Surname</th>
                            <th>Organisation</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($customers as $customer)
                            <tr>
                              <td>{{ $customer->code }}</td>
                              <td>{{ $customer->forenames }}</td>
                              <td>{{ $customer->surname }}</td>
                              <td>{{ $customer->organisation }}</td>
                              <td>
                                <a href="{{ url('/customers/' . $customer->id) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/customers/' . $customer->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

