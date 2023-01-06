<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div class="container pt-5">
        <div class="d-flex align-items-center justify-content-between pb-2">
            <h2>Laravel 9 CRUD</h2>
            <a class="btn btn-primary" href="{{ route('companies.create') }}"> Create Company</a>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
               {{ $message }}
            </div>
        @endif

        

        <table class="table table-dark table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Company Email</th>
                    <th scope="col">Company Address</th>
                    <th scope="col" width="120px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('companies.edit',$company->id) }}">编辑</a>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">删除</button>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>


        @if(!!count($companies))
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">谨慎操作</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  确定删除嘛？
                </div>
                <div class="modal-footer">
                    <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">确定</button>
                </form>
                </div>
              </div>
            </div>
          </div>
          @endif
        {!! $companies->links() !!}
    </div>
</body>
</html>