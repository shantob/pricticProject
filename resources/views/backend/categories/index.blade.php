<x-backend.master>
    <x-slot:title>

        Dashboard
        </x-slot>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-hover table-borderd">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Category Name</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>#</td>
                                                <td>Category Name</td>
                                                <td><a href="{{route('category.edit')}}" class="btn btn-info">Edit</a></td>
                                                <td>
                                                    <form action="{{ route('category.destroy') }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
</x-backend.master>