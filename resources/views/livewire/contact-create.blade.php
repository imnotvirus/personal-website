<div class="col-3">

    <form wire:submit.prevent="create" method="post">
        <h2>Cadastrar contato</h2>

        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="nome"> <i class="fa fa-user" aria-hidden="true"></i> nome</label>
            <strong>{{ $name }}</strong>
            <input type="text" wire:model='name' class="form-control" name="name" id="" aria-describedby="helpId"
                placeholder="name">

            @error('name')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email"> <i class="fas fa-mail-bulk    "></i> Email</label>
            <strong>{{ $email }}</strong>
            <input type="email" wire:model='email' class="form-control" name="" id="" aria-describedby="emailHelpId"
                placeholder="">
            @error('email')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone"> <i class="fa fa-phone" aria-hidden="true"></i> phone</label>
            <strong>{{ $phone }}</strong>
            <input type="phone" wire:model='phone' class="form-control" name="" id="" aria-describedby="phoneHelpId"
                placeholder="">
            @error('phone')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">cadastrar</button>
    </form>

</div>
