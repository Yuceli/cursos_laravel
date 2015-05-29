@include('welcome.layouts.header')

<div class="container">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{Form::open(array('action' => 'RegisterController@registerUser', 'method' => 'post', 'class'=> 'form', 'role' => 'form'))}}

                <h2 class="form-signin-heading text-center">Únete a Women Who Code</h2>


                <div class="form-group">
                    @if($errors -> has("name"))
                    @foreach ($errors->get('name') as $message)
                    {{$message}} <br>
                    @endforeach
                    @endif
                    {{Form::text('name', '',array('class' => 'form-control input-lg', 'placeholder' => 'Nombre' , 'required' => 'required' , 'tabindex' => '1'))}}
                </div>


                <div class="form-group">
                    @if($errors -> has("nickname"))
                    @foreach ($errors->get('nickname') as $message)
                    {{$message}} <br>
                    @endforeach
                    @endif
                    {{Form::text('nickname', '',array('class' => 'form-control input-lg', 'placeholder' => 'Nickname' , 'required' => 'required', 'tabindex' => '2'))}}
                </div>


                <div class="form-group">
                    @if($errors -> has("email"))
                    @foreach ($errors->get('email') as $message)
                    {{$message}} <br>
                    @endforeach
                    @endif
                    {{Form::text('email', '',array('class' => 'form-control input-lg', 'placeholder' => 'Email' , 'required' => 'required','tabindex' => '4'))}}
                </div>

                <div class="form-group">
                    @if($errors -> has("password"))
                    @foreach ($errors->get('password') as $message)
                    {{$message}} <br>
                    @endforeach
                    @endif
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" required="required" tabindex="5">
                </div>


                <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" required="required" placeholder="Confirmar contraseña" tabindex="6">
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7">
                </div>
            </div> 

            {{Form::close()}}
        </div>
    </div> 
</div>
</div>

@include('layouts.footer')