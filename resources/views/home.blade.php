@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
        </div>
        <div class="tab-content container text-white" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">


                <div class="row text-white">
                    <div class="col-md-12">
                        <div class="card bg-dark">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-3">
                                        Table Inventori
                                    </div>
                                    <div class="col-md-9 text-end">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                                            Tambahkan
                                        </button>

                                        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahkan" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="tambahkan">Tambahkan Ke Inventori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body bg-dark text-white">
                                                        <form action="/home" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3 text-start">
                                                                <label for="name" class="form-label">name</label>
                                                                <input type="text" name="name" class="form-control" id="name" required>

                                                                <div class="mb-3">
                                                                    <label for="photo" class="form-label">Photo</label>
                                                                    <input class="form-control" name="photo" type="file" id="photo" required>
                                                                </div>

                                                                <label for="description" class="form-label">description</label>
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" required></textarea>
                                                                    <label for="description">description</label>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label for="total" class="form-label">total</label>
                                                                        <input type="text" name="total" class="form-control" id="total" required>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <label for="type" class="form-label">type</label>

                                                                        <select class="form-select" name="type" id="type" aria-label="Default select example">

                                                                            <option value="pic">Pic</option>
                                                                            <option value="ea">Ea</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table text-white">
                                    <thead>
                                        <tr>
                                            <th scope="col">no</th>
                                            <th scope="col">name</th>
                                            <th scope="col">current</th>
                                            <th scope="col">last update</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_invents['data'] as $invent)

                                        <tr>

                                            <th scope="row">{{ $invent->id }}</th>
                                            <td>{{ $invent->name }}</td>
                                            <td>{{ $invent->current }} {{ $invent->type }}</td>
                                            <td>{{ date('d-M-y', strtotime($invent->updated_at)) }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#view{{ $invent->id }}">
                                                    view
                                                </button>

                                                <form action="/home/{{ $invent->id }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger delete">
                                                        delete
                                                    </button>
                                                </form>

                                                <div class="modal fade" id="view{{ $invent->id }}" tabindex="-1" aria-labelledby="viwer{{ $invent->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="viwer{{ $invent->id }}">{{ $invent->name }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body bg-dark text-white">
                                                                <div class="mb-3 text-start">
                                                                    <img src="{{ $invent->photo }}" width="200" alt="{{ $invent->name }}" srcset="">

                                                                    <div class="my-3">
                                                                        {{ $invent->description }}
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <label for="total" class="form-label">total: </label>
                                                                            {{ $invent->total }} {{ $invent->type }}
                                                                            <br>
                                                                            <label for="current" class="form-label">current: </label>
                                                                            {{ $invent->current }} {{ $invent->type }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#update{{ $invent->id }}">
                                                                        update
                                                                    </button>





                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="update{{ $invent->id }}" tabindex="-1" aria-labelledby="update{{ $invent->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="update{{ $invent->id }}">{{ $invent->name }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body bg-dark text-white">
                                                                <form action="/home/{{ $invent->id }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="mb-3 text-start">
                                                                        <label for="name" class="form-label">name</label>
                                                                        <input type="text" name="name" class="form-control" value="{{ $invent->name }}" id=" name" required>

                                                                        <div class="mb-3">
                                                                            <label for="photo" class="form-label">Photo</label>
                                                                            <input class="form-control" name="photo" type="file" id="photo_upload">
                                                                        </div>

                                                                        <label for="description" class="form-label">description</label>
                                                                        <div class="form-floating">
                                                                            <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" required>{{ $invent->description }}</textarea>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <label for="current" class="form-label">current</label>
                                                                                <input type="text" value="{{ $invent->current }}" name="current" class="form-control" id="current" required>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <label for="type" class="form-label">type</label>

                                                                                <select class="form-select" name="type" id="type" aria-label="Default select example">

                                                                                    <option value="pic">Pic</option>
                                                                                    <option value="ea">Ea</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update changes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                @foreach ($data_invents['auth'] as $invents )
                <form action="/profile" method="post">
                    @csrf
                    <h1 class="text-dark">
                        Name: <input type="text" name="name" value="{{ $invents->name }}" id="">
                    </h1>
                    <div class="row text-end text-dark">
                        <div class="col-md-8 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ $invents->email }}" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="save">
                        </div>
                    </div>

                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
