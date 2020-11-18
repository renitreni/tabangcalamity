@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit/Delete Account</h4>
                            <p class="card-description">User Registration</p>
                            <form method="POST" action="{{ route('users.update') }}">
                                @csrf
                                <input name="up_id" value="{{ $user->up_id }}" type="text" hidden>
                                <input name="id" value="{{ $user->id }}" type="text" hidden>
                                <div class="form-group row">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $user->name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ $user->email }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password"
                                           value="fakepassword">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password"
                                           value="fakepassword">
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm">{{ __('Province') }}</label>
                                    <select name="province" class="form-control">
                                        <option
                                            {{ $user->province != 'marinduque' ? '' : 'selected' }} value="marinduque"
                                            checked>Marinduque
                                        </option>
                                        <option {{ $user->province != 'marikina' ?'': 'selected' }} value="marikina">
                                            Marikina
                                        </option>
                                        <option
                                            {{ $user->province != 'cagayan province' ?'': 'selected' }} value="cagayan province">
                                            Cagayan Province
                                        </option>
                                        <option
                                            value="isabela province" {{ $data->province != 'isabela province' ?'': 'selected' }}>
                                            Isabela Province
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm">{{ __('Position') }}</label>
                                    <select name="position" class="form-control">
                                        <option value="admin" {{ $user->position != 'admin' ?'': 'selected' }}>
                                            Admin
                                        </option>
                                        <option value="user" {{ $user->position != 'user' ?'': 'selected' }}>
                                            User
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 offset-md-2">
                                        <a href="{{ route('users') }}"
                                           class="btn btn-default">
                                            {{ __('Cancel') }}
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                        <a href="{{ route('users.destroy',['id' => $user->id]) }}"
                                           class="btn btn-danger">
                                            {{ __('Delete') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span
                    class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Yaramay 2020</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection
